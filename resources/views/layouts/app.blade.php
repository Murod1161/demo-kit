<html class="font-futura text-white" lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-top-right blur-bg relative m-0 overflow-x-hidden bg-[#0e1014] bg-[url('/public/images/bg-img.png')] bg-[length:120%_auto] bg-no-repeat text-primary xl:bg-[length:70%_auto]">
    @include('components.icons')
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('components.feedback-modal')
    @vite('resources/js/app.js')

</body>

</html>
