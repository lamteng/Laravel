<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Laravel main page - @yield('title')</title>
</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')
</body>
</html>