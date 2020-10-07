<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/1713/PNG/512/iconfinder-videologoplayicon-3993847_112649.png">
    @include('layouts.style.css.css')
    <title>قسم مقارنة الاديان
        @yield('title')
    </title>


</head>
<body class="index-page sidebar-collapse" style="overflow-x: hidden;">
    @include('layouts.header.header')
    <div class="main">
        @yield('content')

    @include('layouts.footer.footer')
</div>
    @include('layouts.style.js.js')
    @yield('script')
</body>
</html>
