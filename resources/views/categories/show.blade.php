@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Category details</h3>
        {{-- Card --}}
        <div class="card w-25">
            {{-- Header --}}
            <div class="card-header">
                {{-- Id --}}
                #{{ $category->id }} -
                {{-- Name --}}
                {{ $category->category_name }}
                {{-- Status --}}
                @if ($category->active)
                    <span class="badge bg-primary">Active</span>
                @else
                    <span class="badge bg-danger">Disabled</span>
                @endif
            </div>
            {{-- Body --}}
            <div class="card-body">
                {{-- Edit --}}
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mr-2">Edit</a>
                {{-- Delete --}}
                <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
