@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create category</div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-12">
                                <label for="category_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                    placeholder="Type here..." required>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="active" value="0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="active" name="active"
                                        value="1">
                                    <label class="form-check-label" for="active">Active</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
