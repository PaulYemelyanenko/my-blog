<?php

namespace App\Http\Services;


use Intervention\Image\Facades\Image;

class ImageService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     * @return string
     */
    public function store($request)
    {
        $path = $request->file('image')->store('public/images');

        return $this->assetStoragePath($path);
    }

    public function assetStoragePath($dir)
    {
        return 'storage/' . substr($dir, 7);
    }

    public function resizeImages($posts)
    {
        foreach($posts as $post){
            Image::make($post->image)->resize(730, 290)->save($post->image);
        }
    }

}
