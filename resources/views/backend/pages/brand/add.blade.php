@extends('backend.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            @if ($errors->any())
                    <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-title">Brand Add</div>
            <a href="{{ route('brand.index')}}" class="btn btn-sm btn-primary float-right">Manage</a>
        </div>
        <div class="card-body">
            <form action="{{ route('brand.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Brand name here..."/>
            </div>
            <button type="submit" class="btn btn-sm btn-success mt-2">Save</button>

        </form>

            
        </div>
    </div>
</div>
@endsection
