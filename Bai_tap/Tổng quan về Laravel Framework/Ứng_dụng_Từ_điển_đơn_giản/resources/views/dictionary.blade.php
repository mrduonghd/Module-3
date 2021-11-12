<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/dict" method="POST">
        @csrf
        <textarea name="a" id="" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Trans</button>
    </form>
</body>
</html>