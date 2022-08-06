<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
{{--            @include('layouts.navigation')--}}

            <!-- Page Content -->
            <main>
                <div class="">
                    <div>
                        <div class="flex mb-8 text-lg p-5 bg-gray-50 text-slate-700">
                            <div class="flex gap-6 mx-auto ">
                                <div class="cursor-pointer hover:text-slate-500">
                                    Feed
                                </div>
                                @auth
                                    <div class="cursor-pointer hover:text-slate-500">
                                        My items
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Add an Item
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Friends
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        {{ $user()->name }}
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Logout
                                    </div>
                                @endauth
                                @guest
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Home
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Login
                                    </div>
                                    <div class="cursor-pointer hover:text-slate-500">
                                        Register
                                    </div>
                                @endguest
                            </div>
                        </div>



                        <div class="max-w-4xl mx-auto ml-4">
                            @isset($header)
                                <h1 class="font-bold text-2xl text-slate-800">
                                    {{ $header }}
                                </h1>
                            @endisset

                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
    </body>
</html>
