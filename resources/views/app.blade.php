<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <header>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('post.create')}}">New Post</a>
        </nav>
    </header>

    <body class="antialiased">
        @yield('main')
    </body>
</html>
