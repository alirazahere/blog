<!doctype html>
<html lang="en">
<head>
    @include('partials._head')
    @yield('stylesheet')
    <title>Laravel | @yield('title')</title>
</head>
<body>
@include('partials._nav')

{{--Content--}}
<div class="container pt-3 pb-1">
    @include('partials._message')
    @yield('content')
    @include('partials._footer')
</div>

@include('partials._script')
@yield('script')
</body>
</html>