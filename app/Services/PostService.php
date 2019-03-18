<?php
/**
 * Created by PhpStorm.
 * User: 11September
 * Git: https://github.com/11September
 * Date: 013 13.03.19
 * Time: 10:53
 */

namespace App\Services;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PostRepository;

class PostService
{

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return $this->postRepository->all();
    }

    public function prepareData(Request $request)
    {
        $attributes['name'] = $request->Name;
        $attributes['measure_id'] = $request->Units;
        $attributes['graph_type'] = $request->Graphtype;
        $attributes['graph_color'] = $request->Colors;
        $attributes['user_id'] = Auth::id();

        return $attributes;
    }
}
