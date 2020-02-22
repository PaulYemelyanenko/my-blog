<?php

namespace App\Http\Services;


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

}
