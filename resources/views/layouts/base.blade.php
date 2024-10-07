<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/site.js'])

        <style>
            .mt-120 {
                margin-top: 30rem;
            }

            .fade-in {
              opacity: 0;
              transform: translateY(40px); /* Adjust the translation value as needed */
              transition: opacity 1s ease-in-out, transform 1s ease-in-out;
            }

            .fade-in.active {
              opacity: 1;
              transform: translateY(0);
            }
          </style>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900">
        <header class="flex justify-between text-white items-center mx-auto px-8 lg:px-16 py-4 lg:py-8">
            <h1 class="text-6xl font-bold">AltChat</h1>
            <nav class="flex gap-8 text-2xl">
                @guest
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                @endguest
                @auth
                    <a href="/dashboard">Enter AltChat</a>
                @endauth
            </nav>
        </header>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class=" max-h-48 w-48 h-48 fill-current text-gray-500" />
                </a>
            </div>

            <div>
                {{ $slot }}
            </div>
            <footer class="flex items-center justify-between text-white w-full px-8 lg:px-16 dark:bg-gray-800 p-16 mt-40">
                <h2 class="flex flex-col items-center text-6xl font-bold gap-16">
                    AltChat
                    <img src="/img/Compass Rose.png" class="aspect-square max-w-64">
                </h2>
                <nav class="flex flex-col self-start gap-2">
                    <h3 class="text-2xl">Info</h3>
                    <a href="" class="underline">Om oss</a>
                    <a href="" class="underline">Lorem ipsum</a>
                    <a href="" class="underline">Lorem ipsum</a>
                    <a href="" class="underline">Lorem ipsum</a>
                </nav>
            </footer>
        </div>
    </body>
</html>
