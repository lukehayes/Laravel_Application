<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Application</title>

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" >
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" >
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" rel="stylesheet">

    </head>

    @if(! Request::is('login'))
    <div class="container">
        <div class="section">
            <header>
                <nav>
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('post.create')}}">New Post</a>
                </nav>
            </header>
        </div>
    </div>
    @endif

    <body class="antialiased">

        @section('main')
            @show

        @if(Request::is('login'))
            @yield('login')
        @endif

        <script charset="utf-8" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
