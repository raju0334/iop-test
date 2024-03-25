@extends('backend.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Product list</div>
                <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary float-right">Add</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($products as $product)
                    <tr>
                        
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $product->category?->name }}</td>
                        <td>
                            @if ($product->image && file_exists(public_path('images/products/'.$product->image)))
                            <img src="{{ $product->image }}" height="50" width="50" />
                            @else
                            <img src="{{ App\Constant\Constants::DEFAULT_IMAGE_PATH }}" height="50" width="50" />
                            @endif
                        
                            {{ $product->name ?? '' }}
                        </td>
                        <td>
                           <strong>Buy price</strong>: {{ $product->buy_price ?? '' }}Tk. <br/>
                           <strong>Sale price</strong>: {{ $product->price ?? '' }}Tk. <br/>
                           <strong>Profit price</strong>: {{ $product->buy_price - $product->price ?? '' }}Tk. <br/>
                        </td>
                        <td>
                            {{ $product->qty ?? '' }}
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Details</a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('product.destroy',$product->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                   
                    </tr>
                    @empty
                    <p>No data found</p>
                @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection