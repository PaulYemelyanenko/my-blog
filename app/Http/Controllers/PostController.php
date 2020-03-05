<?php

namespace App\Http\Controllers;

use App\Http\Services\PostService;
use App\Http\Services\ImageService;
use App\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    protected $image_service;
    protected $post_service;

    public function __construct(ImageService $image, PostService $post)
    {
        $this->image_service = $image;
        $this->post_service = $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepositoryInterface $repository)
    {
        $posts = $repository->getAll();

        $this->image_service->resizeImages($posts);

        return view('pages.index', [
            'posts' => $posts,
            'recent_posts' => $this->post_service->getRecentPosts()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($id, PostRepositoryInterface $repository)
    {
        $post = $repository->getOne($id);

        $this->post_service->saveRecentPost($id);

        return view('pages.single', compact('post', $post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function search(Request $request)
    {
//        dd($this->post_service->search($request->get('s')));
        return view('pages.search-results', ['posts' => $this->post_service->search($request->get('s'))]);
    }
}
