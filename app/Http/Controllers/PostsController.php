<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    $posts = Post::where('status', 'PUBLISHED')->latest()->get();

    return view('blog', compact('posts'));
}
