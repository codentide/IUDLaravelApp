@extends('layouts.app')

@section('content')

    <h3 class="mb-4">Categories</h3> 
    {{-- <ul>

        @foreach ($categories as $category)
            <li>{{ $category -> category_name }} </li>
        @endforeach

    </ul> --}}
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
                    <th scope="col">{{ $category -> id }}</td>          
                    <td>{{ $category -> category_name }}</td>
                    <td>
                        @if ($category -> active) Active
                        @else Disabled
                            
                        @endif  
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

    
@endsection