<?php

namespace App\Http\Controllers\App;

use App\User;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;

class PostsController
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $activities = $this->postService->index();

        return response()->json(['data'=>$activities]);
    }
}
