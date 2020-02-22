<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::paginate(10);
    }

    public function getOne($id)
    {
        return Post::findOrFail($id);
    }
}
