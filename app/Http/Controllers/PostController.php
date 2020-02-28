<?php

namespace App\Http\Controllers;

use App\Http\Services\ImageService;
use App\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    protected $image;

    public function __construct(ImageService $service)
    {
        $this->image = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepositoryInterface $repository)
    {
        $posts = $repository->getAll();
        $this->image->resizeImages($posts);

        return view('pages.index', compact('posts', $posts));
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
}
