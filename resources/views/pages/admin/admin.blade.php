@extends('layouts.admin')

@section('title')

    Blog|Admin panel

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="post-font"> Posts Dashboard</span>
                        <a href="{{ url('admin/posts/create') }}"><button type="button"  class="btn btn-primary float">Create new post</button></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <th scope="row">{{ $post->id }}</th>
                                            <td>{{ $post->title }}</td>
                                            <td><button type="button" class="btn btn-info">Comments</button></td>
                                            <td><a href="{{ url('admin/posts/' . $post->id . '/edit') }}"><button type="button" class="btn btn-primary">Edit</button></td>
                                            <td>
                                                {!! Form::open(['url' => 'admin/posts/' . $post->id, 'method' => 'delete']) !!}
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                }--}}
{{--            });--}}
{{--            $("#delete").click(function () {--}}
{{--                let id = $(this).attr('data-id');--}}
{{--                $.ajax({--}}
{{--                    url: '/admin/posts/' + id,--}}
{{--                    method: 'DELETE'--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
