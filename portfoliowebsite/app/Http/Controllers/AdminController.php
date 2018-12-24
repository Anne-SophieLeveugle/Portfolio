<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Work;

class AdminController extends Controller
{
    public function getEdit($id){
        $werk = Work::find($id);
        $tags = Tag::all();
        return view('admin.edit', [
            'werk' => $werk,
            'itemId' => $id,
            'tags' => $tags
        ]);
    }

    public function getCreate(){
        return view('admin.create');
    }

    public function getIndex(){
        $werken = Work::orderBy('created_at', 'desc')->get();
        return view('admin.index',
            ['werken' => $werken]);
    }

    public function postUpdateWork(Request $request){
        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);

        $werk = Work::find($request->input('id'));

        $werk->title = $request->input('title');
        $werk->content = $request->input('content');

        $werk->save();

        //tags opslagen
        $werk->tags()->sync($request->input('tags') === null ? '' : $request->input('tags'));

        return redirect()->route('work');
    }

    public function getDelete($id){
        $werk = Work::find($id);
        $werk->likes()->delete();
        $werk->tags()->detach();
        $werk->delete();

        return redirect()->action('AdminController@getIndex');
    }
}
