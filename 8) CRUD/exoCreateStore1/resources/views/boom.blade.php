<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/">Reviens</a>
    <form action="/"  method="post">
        @csrf
        Name : <input type="text" name="name">
        Type : <input type="text" name="type">
        Level: <input type="number" name="level">
        <button type="submit">Créer</button>
    </form>
</body>
</html>