<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{__('ورود به سیستم')}}</title>
        <link rel="stylesheet" href="{{ asset('animate/animate.css') }}">

        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

            <div class="w-full animate__animated animate__fadeInUp sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

            <footer class="text-center text-sm mt-52 text-black dark:text-white">
                این سایت توسط <a class="text-blue-500 border-b-blue-500" href="http://www.instagram.com/https://www.instagram.com/code_amin?igsh=MWN2dWQyZ2d4NnA4ZA==">@code_amin</a> ایجاد شده است.
            </footer>
        </div>



    </body>
</html>


