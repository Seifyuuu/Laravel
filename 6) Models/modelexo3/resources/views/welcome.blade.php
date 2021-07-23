<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $item)
    @if ($item->genre == "homme")
        <p style="color: red">{{$item}}</p>
    @else
        
    @endif
    @endforeach
</body>
</html>