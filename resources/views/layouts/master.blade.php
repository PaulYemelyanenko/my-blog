<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>High Seas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="{{ asset('css/default.css') }}" type="text/css" rel="stylesheet"/>
    <!--[if IE]>
    <link href="{{ asset('css/ie.css') }}" type="text/css" rel="stylesheet"/>
    <![endif]-->
    <!--[if lte IE 6]>
    <style>.links ul li {
        margin: 0;
    }</style>
    <![endif]-->
</head>
<body>
<div id="page">
    @include('layouts.partials.header')

        @yield('content')

    @include('layouts.partials.footer')
</div>
</body>
</html>
