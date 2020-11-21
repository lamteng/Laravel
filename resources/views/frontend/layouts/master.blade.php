<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @section('sidebar')
        This is the master sidebar
    @show
    @include('frontend.layouts.topics')
    @include('frontend.layouts.navbar')
    <div class="container"
        @yield('content')
    </div>
    @include('frontend.layouts.footer')
</body>

</html>