<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Messages</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
            @routes
            @viteReactRefresh
            @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <form href="/login" method="POST" id="login-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex flex-col items-center justify-center space-y-2">
                            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Login</h1>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Enter your credentials to continue.</p>
                        </div>
                        {{-- login page form --}}
                        <div class="flex flex-col items-center justify-center w-full max-w-md p-6 space-y-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                            <div class="flex flex-col w-full space-y-2">
                                <label for="email" class="text-sm font-semibold text-gray-600 dark:text-gray-200">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="px-4 py-2 text-gray-700 bg-gray-200 border border-transparent rounded-md dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 focus:border-red-500 focus:outline-none    focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" />   
                            </div>
                            <div class="flex flex-col w-full space-y-2">
                                <label for="password" class="text-sm font-semibold text-gray-600 dark:text-gray-200">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password" class="px-4 py-2 text-gray-700 bg-gray-200 border border-transparent rounded-md dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 focus:border-red-500 focus:outline-none    focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" />   
                            </div>
                        </div>
                    <button class="btn my-5" type="submit">Submit</button>
                                

                    </div>

                </form>
            </div>
        </div>
    </body>
</html>
