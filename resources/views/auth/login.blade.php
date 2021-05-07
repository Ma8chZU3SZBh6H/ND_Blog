@extends("layouts.app")

@section("main")
    <h1>Login</h1>
    @error("status")
    <p><strong>{{$message}}</strong></p>
    @enderror
    <form action="" method="post">
        @csrf
        <label for="email">Email:</label>
        @error("email")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        @error("password")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="password" name="password" id="password">
        <br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me.</label>
        <br>
        <input type="submit" value="Login">
    </form>
@endsection