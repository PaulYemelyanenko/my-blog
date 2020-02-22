<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Post;
use App\Http\Services\ImageService;

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
        //For edit-post page, when we click Edit need to redirect on two page back
        request()->session()->put('editBackUrl', request()->fullUrl());

        $posts = $repository->getAll();

        return view('pages.admin.admin', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $image_path = $this->image->store($request);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->image = $image_path;

        $post->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PostRepositoryInterface $repository)
    {
        $post = $repository->getOne($id);

        return view('pages.admin.edit-post', compact('post', $post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRepositoryInterface $repository, $id)
    {
       $post = $repository->getOne($id);
       $post->title = $request->input('title');
       $post->description = $request->input('description');
       $post->content = $request->input('content');

       $post->save();

       return $request->session()->has('editBackUrl') ? redirect(session('editBackUrl')) : redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return back();
    }
}
