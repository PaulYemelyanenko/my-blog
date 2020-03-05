<?php

namespace App\Http\Services;


use Intervention\Image\Facades\Image;
use App\Repositories\Interfaces\PostRepositoryInterface;


class PostService
{
    protected $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getRecentPosts()
    {
        return $this->repository->getRecentPosts(session('recent_post_ids') ?? []);
    }

    public function saveRecentPost($id)
    {
        $post_arr = session('recent_post_ids');

        if ($post_arr !== null and !in_array($id, $post_arr)) {
            session()->push('recent_post_ids', $id);
        } else {
            session()->put('recent_post_ids', [$id]);
        }
        session()->save();

    }

    public function search($request)
    {
        return $this->repository->searchAllPosts($request);
    }


}
