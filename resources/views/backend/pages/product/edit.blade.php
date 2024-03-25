@extends('backend.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Product edit</div>
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-right">Manage</a>
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
                <div class="mb-2">
                    <p>Product image</p>
                    <img src="{{ $product->image }}" alt="product image" width="100">
                </div>
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cat_id">Category Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="cat_id">
                            <option selected value="{{ $categories->first()->id }}">{{ $categories->first()->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" value="{{ $product->name ?? old('name') }}" class="form-control" placeholder="Category name here..."/>
                    </div>
                    <div class="form-group">
                        <label for="buy_price">Buy price <span class="text-danger">*</span></label>
                        <input type="text" id="buy_price" name="buy_price" value="{{ $product->buy_price ?? old('buy_price') }}" class="form-control" placeholder="Product buy price here..."/>
                    </div>

                    <div class="form-group">
                        <label for="price">Sale price <span class="text-danger">*</span></label>
                        <input type="text" id="price" name="price" value="{{ $product->price ?? old('price') }}" class="form-control" placeholder="Product sale price here..."/>
                    </div>

                    <div class="form-group">
                        <label for="discount_price">Discount price</label>
                        <input type="text" id="discount_price" value="{{ $product->discount_price ?? old('discount_price') }}" name="discount_price" class="form-control" placeholder="Product discount price here..."/>
                    </div>

                    <div class="form-group">
                        <label for="qty">QTY <span class="text-danger">*</span></label>
                        <input type="number" id="qty" name="qty" value="{{ $product->qty ?? old('qty') }}" class="form-control" placeholder="Product qty here..."/>
                    </div>

                    <div class="form-group">
                        <label for="sku">SKU <span class="text-danger">*</span></label>
                        <input type="text" id="sku" name="sku" value="{{ $product->sku ?? old('sku') }}" class="form-control" placeholder="Product sku here..."/>
                    </div>

                    <div class="form-group">
                        <label for="short_description">Short description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="short_description" name="short_description" placeholder="Enter short description">{{ $product->short_description ?? old('short_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="long_description">Long description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="long_description" name="long_description" placeholder="Enter long description">{{ $product->long_description ?? old('long_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Product image <span class="text-danger">*</span></label>
                        <input type="file" id="image" name="image" class="form-control"/>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection