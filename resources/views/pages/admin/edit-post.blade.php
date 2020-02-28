@extends('layouts.admin')

@section('title')

    Blog|Admin panel|Edit post

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="post-font">Edit Post</span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ url('admin/posts/' . $post->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ $post->title ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Description</label>
                                <input type="text" class="form-control" name="description" id="exampleFormControlInput2" value="{{ $post->description ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ $post->content ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="imageFormControlInput3">Image</label>
                                <input type="file" name="image" class="form-control" id="imageFormControlInput3" required>
                            </div>
                            <button type="submit"  class="btn btn-primary float">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
