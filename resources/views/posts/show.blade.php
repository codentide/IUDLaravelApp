@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p>Created at: {{ $post->created_at }}</p>
        <p>Updated at: {{ $post->updated_at }}</p>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary m-1">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
