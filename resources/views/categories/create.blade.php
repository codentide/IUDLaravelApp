@extends('layouts.app')

@section('content')

<h3 class="mb-4">Create Category</h3>

<form action="{{ route('categories.store')}}" method="POST" class="row g-3 ">


    @csrf
  <div class="col-md-12">

    <label for="category_name" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Type here..." required>
    
  </div>
  <div class="col-12">

    <div class="form-check">

      <input class="form-check-input" type="checkbox" id="active" name="active" value="1">
      <label class="form-check-label" for="active">Active</label>

    </div>

  </div>
  <div class="col-12">

    <button class="btn btn-primary" type="submit">Save</button>

  </div>
    
</form>

@endsection

    {{-- <div class="form-group row">

        <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
        <div class="col-sm-10">

            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Type here...">

        </div>

    </div>
    <div class="form-group row align-items-center">

        <div class="col">

            <div class="form-check">

                <input type="checkbox" class="form-check-input" id="active" name="active" value="0">
                <label for="active" class="form-check-label">Active</label>

            </div>

        </div>
        <div class="col">

            <button type="submit" class="btn btn-primary">Save</button>

        </div>
        
    </div> --}}