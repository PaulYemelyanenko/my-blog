<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function getOne($post)
    {
        return Post::findOrFail($post);
    }
}
