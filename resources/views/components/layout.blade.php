<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <header>
        @yield('banner')
    </header>
    {{--{{$slot}} //default--}}
    {{$content}}
</body>
