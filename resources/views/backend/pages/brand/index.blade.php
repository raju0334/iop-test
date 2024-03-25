@extends('backend.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Brand List</div>
            <a href="{{ route('brand.create')}}" class="btn btn-sm btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                                <td>{{ Str::substr($brand->name, 0, 60) }}</td>
                                <td>
                                <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('brand.destroy', $brand->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
