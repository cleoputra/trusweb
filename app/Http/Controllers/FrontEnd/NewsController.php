<?php

namespace App\Http\Controllers\FrontEnd;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('frontEnd.news', ['posts' => Post::all()]);
    }

    public function detail(Post $post)
    {
        return view('frontEnd.detailNews', ['post' => $post]);
    }
}
