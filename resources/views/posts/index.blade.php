@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Posts</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">Create Post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="align-middle">
                        <td scope="col">{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            @foreach ($categories as $category)
                                {{-- Si category_id coincide con el category_id del post muestra el category_name de dicho id --}}
                                {{ $category->id == $post->category_id ? $category->category_name : '' }}
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary m-1">See</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary m-1">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
