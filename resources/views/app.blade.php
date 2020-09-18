<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Application</title>

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" >

    </head>

    <div class="section">
        <div class="container">
            <header>
                <nav>
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('post.create')}}">New Post</a>
                </nav>
            </header>
        </div>
    </div>

    <body class="antialiased">
        @section('main')
        @show
            
        <script charset="utf-8" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
