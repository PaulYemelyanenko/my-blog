@extends('layouts.master')


@section('content')

    <div id="upper_page">
        <h1 class="contactus"></h1>
        <form action="#" method="post">
            <fieldset>
                <p class="contactpage">
                    <label for="Name">Your name:</label>
                    <br />
                    <input type="text" name="Name" size="40" class="textfield ie7hide" tabindex="1" />
                    <br />
                    <label for="Email">Email address:</label>
                    <br />
                    <input type="text" name="Email" size="40" class="textfield ie7hide" tabindex="2" />
                    <br />
                    <label for="Message">Message:</label>
                    <br />
                    <textarea type="text" name="Message" rows="16" class="textfield" tabindex="3"></textarea>
                    <br />
                    <input type="reset" name="Reset" value="Reset"  class="submit"/>
                    <input type="submit" name="Submit" value="Send"  class="submit"/>
                </p>
            </fieldset>
        </form>
        <p>If you have any problems with this form, you may contact me by <a href="#">>email</a>.</p>
    </div>


@endsection
