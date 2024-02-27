<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/library/games" method="post">
        <label for="Game"></label>
        <input type="text" name="name">
        <input type="submit" value="Submit">
        @csrf
    </form>
    
</body>
</html>