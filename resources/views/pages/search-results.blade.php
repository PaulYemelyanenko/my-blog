@extends('layouts.master')

@section('content')

    <div id="upper_page">
        <p>SEARCH RESULTS</p>
    </div>
    <div id="lower_page">
        <div id="lower_left">
            @foreach($posts as $post)
                <div class="img">
                    <img src="{{ asset($post->image) }}">
                </div>
                <div class="blogheader">
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <h3>posted by Paul on {{ date('F jS, o', strtotime($post->created_at)) }}</h3>
                </div>
                <p>{{ $post->description }}</p>
                <h4>Categories: <span class="category"> <a href="#">Misc.</a>, <a href="#">Blog</a>, <a href="#">Template</a></span>
                    <span class="slash">//</span> <a href="#">4 Comments</a></h4>
            @endforeach

            {{ $posts->links() }}
        </div>
        <div id="lower_right">
            <div id="upper_page">
                <p>Enter search phrase</p>
            </div>
            <form method="get" action="/search">
                <div>
                    <input type="text" value="" name="s" class="textfield search"/>
                    <input type="submit" id="searchsubmit" value="Search" class="submit_wp"/>
                </div>

            </form>
        </div>
    </div>

@endsection
