<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/1713/PNG/512/iconfinder-videologoplayicon-3993847_112649.png">
    @include('adminPanel.layouts.includes.style.css.css')
    @yield('style')
</head>
<body class="dark-edition">
    <div class="wrapper ">
        @include('adminPanel.layouts.includes.sidebar.sidebar')
        @include('adminPanel.layouts.includes.header.header')
        <div class="content">
            <div class="container-fluid">
              @yield('content')
            </div>
        </div>
        @include('adminPanel.layouts.includes.footer.footer')
    </div>
    @include('adminPanel.layouts.includes.plugins.plugins')
    @include('adminPanel.layouts.includes.style.js.js')
    @yield('script')
</body>
</html>
