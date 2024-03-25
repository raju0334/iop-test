@extends('backend.master')


@section('content')
<div class="container">
    <div class="card mt-3">

       <div class="card-header">
           <div class="card-title ">Category List</div>
           <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-right">Add</a>
       </div>
           <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                         <th>SL</th>
                         <th>Name</th>
                         <th>Action</th>
                    </tr>
    
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ Str::substr($category->name, 0, 60)  }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id )}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('category.destroy', $category->id )}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                        </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
        
     </div>
     
</div>
@endsection