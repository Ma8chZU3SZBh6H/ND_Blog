<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1><a href="{{route('home')}}">Blog Page</a></h1>
    @guest
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
    @endguest
    @auth
        <form action="{{route('logout')}}" method="post">
            @csrf
            <label for="">Logged as <strong>{{Auth()->User()->name}}</strong></label>
            <input type="submit" value="Logout">
        </form>
    @endauth
    @yield("main")
</body>
</html>