<?php

namespace App\Repositories\Interfaces;


interface PostRepositoryInterface
{
    public function getAll();
    public function getOne($post);
    public function getRecentPosts($ids);
}
