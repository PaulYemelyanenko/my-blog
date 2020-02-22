@extends('layouts.master')


@section('content')

    <div id="upper_page">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed eros. Donec vestibulum, sem id venenatis
            vulputate, magna metus posuere tortor, a facilisis enim quam non justo. Integer porta massa vitae elit.
            Integer commodo, libero eu placerat tincidunt, est tellus interdum metus, quis suscipit dui diam quis
            turpis. Vivamus quis lacus. Aenean quis felis. Aliquam erat volutpat. Nulla non felis. Cras ac mi. Vivamus
            ac odio nec enim vulputate varius. Aliquam erat volutpat. Nullam semper pulvinar libero. Ut et eros id felis
            fermentum tincidunt.</p>
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
            <h1>recent posts</h1>
            <div class="post_summary">
                <ul>
                    <li><a href="#"> <span class="ps_title">Vestibulum interdum sem ac dui.</span> <br/>
                            <span class="ps_plain">Posted on December 5th, 2006 with 2 Comments</span></a></li>
                    <li><a href="#"> <span class="ps_title">Aliquam ullamcorper congue massa.</span> <br/>
                            <span class="ps_plain">Posted on December 4th, 2006 with 12 Comments</span></a></li>
                    <li><a href="#"> <span class="ps_title">Quisque fermentum sapien vel ante.</span> <br/>
                            <span class="ps_plain">Posted on December 2nd, 2006 with 4 Comments</span></a></li>
                    <li><a href="#"> <span class="ps_title">Maecenas pretium leo eget lectus.</span> <br/>
                            <span class="ps_plain">Posted on November 23rd, 2006 with 2 Comments</span></a></li>
                    <li><a href="#"> <span class="ps_title">Cras sagittis. Pellentesque dictum bibendum leo.</span>
                            <br/>
                            <span class="ps_plain">Posted on November 18th, 2006 with 8 Comments</span></a></li>
                </ul>
            </div>
        </div>
        <div id="lower_right">
            <h2 class="iefix">about me</h2>
            <p>This template includes a contact page (click the contact link in the menu), and a single story page
                (click the first blog entry to the left).</p>
            <p>The header image was drawn by the extremely talented artist Jacob Sjoman and he graciously allowed me to
                use it.</p>
            <form method="get" action="#">
                <div>
                    <input type="text" value="" name="s" class="textfield search"/>
                    <input type="submit" id="searchsubmit" value="Search" class="submit_wp"/>
                </div>

            </form>
            <h2>Archives</h2>
            <div class="links">
                <ul>
                    <li><a href="#">August 2006</a></li>
                    <li><a href="#">September 2006</a></li>
                    <li><a href="#">October 2006</a></li>
                    <li><a href="#">November 2006</a></li>
                    <li><a href="#">December 2006</a></li>
                </ul>
            </div>
            <h2>Categories</h2>
            <div class="links">
                <ul>
                    <li><a href="#">Templates</a></li>
                    <li><a href="#">Updates</a></li>
                    <li><a href="#">Games &amp; Fun</a></li>
                    <li><a href="#">Technology</a></li>
                </ul>
            </div>
            <h2>My links</h2>
            <div class="links">
                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">In at augue ac</a></li>
                    <li><a href="#">Class aptent taciti</a></li>
                    <li><a href="#">Phasellus egestas</a></li>
                    <li><a href="#">Nulla at tellus</a></li>
                    <li><a href="#">Aliquam dolor</a></li>
                    <li><a href="#">Etiam vel nunc</a></li>
                    <li><a href="#">Pellentesque</a></li>
                    <li><a href="#">Fusce sed massa</a></li>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">In at augue ac</a></li>
                    <li><a href="#">Class aptent taciti</a></li>
                    <li><a href="#">Phasellus egestas</a></li>
                    <li><a href="#">Nulla at tellus</a></li>
                    <li><a href="#">Aliquam dolor</a></li>
                    <li><a href="#">Etiam vel nunc</a></li>
                    <li><a href="#">Pellentesque</a></li>
                    <li><a href="#">Fusce sed massa</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
