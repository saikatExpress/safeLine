<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h2 style="color:blue;">This is about page</h2>
    <p style="color: blue;">First Number = {{ $a = 10 }}</p>
    <p>Second Number = {{ $b = 20 }}</p>
    <p>Total = {{ $c = $a + $b }}</p>
    <a href="{{ url('/') }}">Back to home page</a>
</body>
</html>