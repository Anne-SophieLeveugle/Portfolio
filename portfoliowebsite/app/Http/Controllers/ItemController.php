<?php

namespace App\Http\Controllers;


use App\Like;
use App\Work;
use App\Tag;
use App\Image;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public  function getWork(){

        $werken = Work::orderBy('created_at', 'desc')->paginate(3);
        return view('content.work',
            ['werken' => $werken]);
    }

    public function getWorkById($id){
        $werk = Work::where('id', $id)->with('images')->with('likes')->first();
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

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image1 = $request->file('image');
        $input['imagename'] = time() . '.' . $image1->getClientOriginalExtension();
        $destinationpath = public_path('images/werkenimages/');
        $image1 -> move($destinationpath, $input['imagename']);


        $this->validate($request, [
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);

        $werk = new Work([
            'title' => $request->input('title'),
            'content' => $request->input('content')

        ]);

        $werk->save();

        $tag = new Tag ([
            'tag_id' => $werk->tags()->sync($request->input('tags') === null ? '' : $request->input('tags')),
            'work_id' => $werk->id
        ]);


            $image = new Image([
                'imagepath' => 'images/werkenimages/' . $input['imagename'],
                'work_id' => $werk->id
            ]);



        $image->save();

        return redirect()->route('admin.index');
    }
}
