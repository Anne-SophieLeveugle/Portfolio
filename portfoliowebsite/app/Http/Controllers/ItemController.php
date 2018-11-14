<?php

namespace App\Http\Controllers;


use App\Like;
use App\Work;
use App\Tag;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public  function getWork(){

        $werken = Work::orderBy('created_at', 'desc')->paginate(2);
        return view('content.work',
            ['werken' => $werken]);
    }

    public function getWorkById($id){
        $werk = Work::where('id', $id)->with('likes')->first();
        return view('content.detail', ['werk' => $werk]);
    }

    public function getLikeWork($id){
        $werk = Work::where('id', $id)->first();
        $like = new Like();
        $werk->likes()->save($like);
        return redirect()->back();
    }


    public function postCreateWork(Request $request){
        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);

        $werk = new Work([
            'title' => $request->input('title'),
            'content' => $request->input('content')

        ]);

        $werk->save();

        return redirect()->route('admin.index');
    }
}
