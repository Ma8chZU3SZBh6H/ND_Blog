@extends("layouts.app")

@section("main")
    <h1>Register</h1>
    @error("status")
    <p><strong>{{$message}}</strong></p>
    @enderror
    <form action="{{route('register')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        @error("name")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        <br>
        <label for="email">Email:</label>
        @error("email")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="text" name="email" id="email" value="{{old('email')}}">
        <br>
        <label for="password">Password:</label>
        @error("password")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="password" name="password" id="password">
        <br>
        <label for="password_confirmation">Password confirmation:</label>
        <br>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br>
        <input type="submit" value="Register">
    </form>
@endsection