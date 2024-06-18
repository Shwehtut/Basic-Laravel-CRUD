<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{

   public function index()
    {

         $posts=Post::all();
        return view('home',compact('posts'))->with('success','Success Render');
    }

    public function create(Request$request){
           $request->validate([
            'title'=>'required|min:2|max:10'
        ],[
            'title.required'=> 'titleလိုအပ်ပါသည်။'
        ]);
    }
}
