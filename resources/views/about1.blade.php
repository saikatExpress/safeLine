<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="images/png" rel="shortcut icon" href="https://media.istockphoto.com/id/1283119095/photo/about-us-word-on-a-red-wooden-block.jpg?b=1&s=170667a&w=0&k=20&c=_KI4jJlJoCAt40B6AnMjc-MbQtxZYtlKrWvpgEIIkEg=" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About page | Laravel</title>

    <style>
        .form{
            background-color: grey;
            width: 50%;
            margin: 0 auto;
            padding: 10px 12px 10px;
        }
        .form input{
            padding: 10px;
            margin: 5px;
            width: 50%;
        }

        .form button{
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2 style="color:blue;">This is about page</h2>


    <div class="form">
        <h2>Testing Form</h2>
        <form action="{{ route('student.about') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Type your name"> <br>
            <input type="email" name="email" placeholder="Type your name"> <br>
            <button type="submit">Send</button>
        </form>
    </div>

 <a href="{{ route('go.us') }}">Go to Page</a>
    <p style="color: blue;">First Number = {{ $a = 10 }}</p>
    <p>Second Number = {{ $b = 20 }}</p>
    <p>Total = {{ $c = $a + $b }}</p>
    <a href="{{ url('/') }}">Back to home page</a>


    
</body>
</html>