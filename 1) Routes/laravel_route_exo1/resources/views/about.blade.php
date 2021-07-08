<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="{{url('/')}}">Welcome</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
            </ul>
        </div>
    </div>
    <h1>Je suis sur la page About</h1>
    <p>hello {{$prenom}} {{$nom}}</p>
</body>
</html>