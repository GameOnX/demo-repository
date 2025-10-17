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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-900">
                    School Website
                </h1>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>

        <main class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($posts as $post)
                                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                                    <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
                                    <p class="mt-2 text-gray-600">by {{ $post->user->name }} on {{ $post->created_at->format('j M Y, g:i a') }}</p>
                                    <p class="mt-4 text-gray-800">{{ Str::limit($post->content, 150) }}</p>
                                    <a href="{{ route('posts.show', $post) }}" class="mt-4 inline-block text-indigo-600 hover:text-indigo-900">Read more</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </main>

        <footer class="bg-white shadow mt-12">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} School Website. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>