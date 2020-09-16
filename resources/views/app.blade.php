<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" >


        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <header>
                    <nav>
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('post.create')}}">New Post</a>
                    </nav>
                </header>
            </div>
        </div>
    </div>


    <body class="antialiased">
        @yield('main')
    </body>

</html>
