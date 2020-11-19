<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('frontend.layouts.topics')
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')
</body>

</html>