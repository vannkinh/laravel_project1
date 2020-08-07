@extends('layouts.app')

@section('content')
    <h1>Posts</h3>    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div>
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written On {{$post->created_at}}</small><br>
                <small>Update On {{$post->updated_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
    {{$posts->links()}}
@endsection

{{-- <style scoped>
    h3{
        background-color: rgb(22, 25, 201);
    }

</style> --}}