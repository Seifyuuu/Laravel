<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="antialiased">
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav">
                    <li><a href="{{url('/welcome')}}">Welcome</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                </ul>
            </div>
        </div>
       <h1>Je suis sur la page Welcome </h1>
    </body>
</html>
