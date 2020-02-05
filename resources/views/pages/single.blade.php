@extends('layouts/master')

@section('content')

    <div id="upper_page">
        <h1>This is your first blog entry</h1>
        <p>Donec aliquam eros sagittis ante. Nullam lacinia orci in quam. Donec ac mi a erat ultrices luctus. Integer vulputate, enim ornare ullamcorper mattis, turpis ipsum sagittis risus, id convallis lacus velit vel orci. In sodales nisi a ligula. Phasellus tristique. Nam id velit. Nunc tincidunt porttitor est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Suspendisse nibh. Nulla facilisi. Curabitur justo justo, congue eget, venenatis vel, ullamcorper et, turpis. Sed eleifend volutpat ipsum. Phasellus egestas. Nulla at tellus. Aliquam dolor. Etiam vel nunc id dolor vehicula pellentesque. Nulla sapien. Fusce ac massa. Ut malesuada tempor lorem.</p>
    </div>
    <div id="lower_page">
        <div id="lower_single">
            <h2 class="comments">Leave a Reply</h2>
            <form action="#" method="post" id="commentform">
                <p>
                    <label for="author">Name <small> </small></label>
                    <br />
                    <input type="text" name="author" class="textfield comments" size="30" tabindex="1" />
                    <br />
                    <label for="email">Email <small>(will not be published) </small></label>
                    <br />
                    <input type="text" name="email" class="textfield comments" size="30" tabindex="2" />
                    <br />
                    <label for="url">Website</label>
                    <br />
                    <input type="text" name="url" class="textfield comments" size="30" tabindex="3" />
                </p>
                <label for="comment">Your beef</label>
                <br />
                <textarea name="comment" class="textfield comments" cols="50%" rows="12" tabindex="4"></textarea>
                <p>
                    <input name="submit" type="submit" class="submit_wp" tabindex="5" value="Submit Comment" />
                </p>
                <p><small><strong>XHTML:</strong> You can use these tags: &lt;a href=""&gt;, &lt;abbr&gt;, &lt;acronym&gt;, &lt;b&gt; or &lt;strong&gt;, &lt;code&gt;, &lt;blockquote&gt;, &lt;i&gt; or &lt;em&gt;, &lt;strike&gt;</small></p>
                <input type="hidden" name="comment_post_ID" value="#" />
            </form>
        </div>
    </div>


@endsection

