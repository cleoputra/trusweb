<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('admin.homeAdmin', ['posts' => Post::all()]);
    }

    public function addForm(Request $request)
    {
        return view('admin.addPost');
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'author' => 'required|integer|exists:users,id',
            'content' => 'required|string',
            'photo' => 'image|nullable',
        ]);

        $photo = $request->photo->store('posts', 'public');

        $post = Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'photo' => $photo,
        ]);

        return redirect()->route('admin.home');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'post' => 'required|integer|exists:posts,id',
        ]);

        $post = Post::find($request->post);

        Storage::disk('public')->delete($post->photo);

        $post->delete();

        return redirect()->route('admin.home');
    }
}
