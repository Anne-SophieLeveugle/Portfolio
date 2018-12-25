<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Work;
use App\Image;

class AdminController extends Controller
{
    public function getEdit($id){
        $werk = Work::find($id);
        $tags = Tag::all();
        $image = Image::all();
        return view('admin.edit', [
            'werk' => $werk,
            'itemId' => $id,
            'tags' => $tags,
            'images' => $image,
        ]);
    }

    public function getCreate(){
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return view('admin.create',
            ['tags' => $tags]);;
    }

    public function getIndex(){
        $werken = Work::orderBy('created_at', 'desc')->get();
        return view('admin.index',
            ['werken' => $werken]);
    }

    public function postUpdateWork(Request $request){


        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $image1 = $request->file('image');

        if($image1 != null) {
            $input['imagename'] = time() . '.' . $image1->getClientOriginalExtension();
            $destinationpath = public_path('images/werkenimages/');
            $image1->move($destinationpath, $input['imagename']);
        }

        $werk = Work::find($request->input('id'));

        $werk->title = $request->input('title');
        $werk->content = $request->input('content');

        $werk->save();

        if($image1 != null) {
            $image = new Image([
                'imagepath' => 'images/werkenimages/' . $input['imagename'],
                'work_id' => $werk->id
            ]);

            $image->save();
        }

        //tags opslagen
        $werk->tags()->sync($request->input('tags') === null ? '' : $request->input('tags'));

        return redirect()->route('work');
    }

    public function getDelete($id){
        $werk = Work::find($id);
        $werk->likes()->delete();
        $werk->tags()->detach();
        $werk->images()->delete();
        $werk->delete();

        return redirect()->action('AdminController@getIndex');
    }

    public function getDeleteImage($id){
        $image = Image::find($id);
        $image->delete();

        return redirect()->back();
    }
}
