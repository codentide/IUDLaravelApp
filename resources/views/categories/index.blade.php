@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Categories</h3>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Create Category</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="align-middle">
                        <th scope="col">{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if ($category->active)
                                Active
                            @else
                                Disabled
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-secondary m-1">See</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary m-1">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                style="display: inline;">
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
