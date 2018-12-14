<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
    	return view ('admin.addNewPost');
    }

    public function store(Request $request) {
        
         $post = new Post();
         $post->title = $request->postTitle;
         $post->author = "TRUS admin";
         $post->post = $request->postContent;

         $post->save();
        
         $postTitle = $request['postTitle'];
         $postContent = $request['postContent'];

         return view('output', ['postTitle' => $postTitle]);
         return view('output', ['postContent' => $postContent]);
    }

    public function form() {
        $post = DB::table('post_panel')->orderBy('name')->get();

        return view('post.monitor', ['post_panel' => $post]);
    }

    public function show() 
    {

        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }
}
