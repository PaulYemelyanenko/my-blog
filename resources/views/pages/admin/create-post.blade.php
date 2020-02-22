@extends('layouts.admin')

@section('title')

    Blog|Admin panel|Create post

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="post-font">Create Post</span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="{{ url('admin/posts') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Description</label>
                                    <input type="text" name="description" class="form-control" id="exampleFormControlInput2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="imageFormControlInput3">Image</label>
                                    <input type="file" name="image" class="form-control" id="imageFormControlInput3" required>
                                </div>
                                <button type="submit"  class="btn btn-primary float">Create new post</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
