<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/go/create">Clique</a>
    <br>
    <br>
    @foreach ($data as $item)
    <div>
    <span> {{$item->name}} </span>
    <span> {{$item->type}} </span>
    <span> {{$item->level}} </span> 
    </div>
    <br> 
    @endforeach
</body>
</html>