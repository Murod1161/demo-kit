<html class="font-futura text-white" lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body
    class="bg-[#0e1014] text-primary m-0 bg-[url('/public/images/bg-img.png')] bg-no-repeat bg-top-right bg-[length:120%_auto] backdrop-blur-xl xl:bg-[length:70%_auto] overflow-x-hidden animate-fadeInScale">

        @include('components.icons')
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

    @include('components.feedback-modal')
    @vite('resources/js/app.js')

</body>

</html>
