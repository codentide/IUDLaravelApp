@extends('layouts.app')
@section('content')
    {{-- Container --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Card --}}
                <div class="card">
                    {{-- Card header --}}
                    <div class="card-header">Edit Category</div>
                    {{-- Card body --}}
                    <div class="card-body">
                        {{-- Form --}}
                        <form action="{{ route('categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- Category name box --}}
                            <div class="form-group mb-3" @error('category_name') has-error @enderror>
                                {{-- Label --}}
                                <label for="category_name" class="form-label">Category Name</label>
                                {{-- Input --}}
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                    placeholder="Type here..." value="{{ $category->category_name }}">
                                @error('category_name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                {{-- Label Status --}}
                                <label for="active">Status</label>
                                {{-- SELECT --}}
                                <select name="active" id="active" class="form-control">
                                    {{-- OPTIONS --}}
                                    <option value="1" {{ $category->active ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ !$category->active ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            {{-- Submit --}}
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
