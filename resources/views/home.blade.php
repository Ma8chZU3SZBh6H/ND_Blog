@extends("layouts.app")

@section("main")
    <hr>
    <h2>Create post</h2>
    @auth
    <form action="{{route('home')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        @error("title")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        <br>
        <label for="image">Image:</label>
        @error("image")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <input type="file" name="image" id="image" value="{{old('image')}}">
        <br>
        <label for="description">Description</label>
        @error("description")
            <br>
            <strong>{{$message}}</strong>
        @enderror
        <br>
        <textarea name="description" id="description" cols="30" rows="10" >{{old('description')}}</textarea>
        <br>
        <input type="submit" value="Create post">
    </form>
    @endauth
    @guest
        <p>You must login to create a post!</p>
    @endguest
    <hr>
    <h2>Latests posts</h2>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div>
                <h3>{{$post->title}}
                @auth
                    @if ($post->user_id == Auth()->User()->id)
                        <form action="{{route('post.delete', $post)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="delete">
                        </form>
                    @endif
                @endauth
                </h3>
                <img height="256px" src="{{Storage::url($post->image)}}" alt="">
                <p>{{$post->description}}</p>
                <small>By <strong>{{$post->user()->name}}</strong></small>
            </div>
            <hr>
        @endforeach
    @else
        <p>-No posts found!</p>
    @endif
    
    {{ $posts->appends(Request::all())->links() }}
@endsection