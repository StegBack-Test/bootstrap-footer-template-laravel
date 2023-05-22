<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <meta http-equiv="refresh" content="1"> --}}
    @yield('head')
    @yield('style')
</head>
<body>

@yield('body')

@yield('script')
</body>
</html>

