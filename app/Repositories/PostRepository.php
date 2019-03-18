<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 012 12.03.19
 * Time: 15:11
 */

namespace App\Repositories;

use App\Post;

class PostRepository
{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function create($attributes)
    {
        return $this->post->create($attributes);
    }

    public function all()
    {
        return $this->post->latest()->get();
    }

    public function find($id)
    {
        return $this->post->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->post->find($id)->update($attributes);
    }


    public function delete($id)
    {
        return $this->post->find($id)->delete();
    }
}
