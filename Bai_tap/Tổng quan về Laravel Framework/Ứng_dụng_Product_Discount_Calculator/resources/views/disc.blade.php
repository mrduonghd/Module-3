<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/disc" method="POST">
    @csrf 
    Product Description: <input type="text" name="a"><br><br>
    List Price: <input type="text" name="b"><br><br>
    Discount Percent: <input type="text" name="c"><br><br>
    <button type="submit">Submit</button>
    </form>
</body>

</html>