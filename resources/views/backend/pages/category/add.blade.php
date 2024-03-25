@extends('backend.master')
@section('content')
<div class="container">
     <div class="card mt-3">

        <div class="card-header">
            <div class="card-title ">Category Add</div>
            <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary float-right">Manage</a>
        </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                     </ul>
                    </div>
                @endif
                <form action="{{ route("category.store")}}" method="post">
                    @csrf
                    <div>
                        <label for="name">Name <span class="text-danger">*</span> </label>
                        <input type="text"id="name"  name="name" class="form-control" placeholder="Category name here..."/>
                        <button type="submit" class="btn btn-sm btn-success mt-2">Save</button>
                    </div>
                </form>
                    
            </div>
        </div>
        
     </div>
     
</div>
@endsection