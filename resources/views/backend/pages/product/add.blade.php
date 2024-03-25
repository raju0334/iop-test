@extends('backend.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Product Add</div>
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-right">Manage</a>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cat_id">Category Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="cat_id">
                            <option selected disabled>Select a category *</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    @if($errors->has('cat_id'))
                        <div class="text-danger">{{ $errors->first('cat_id') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Category name here..."/>
                        <span style="color: red">{{ $errors->has('name') ? $errors->first('name') : ' '  }}</span>
                    </div>
                    <div class="form-group">
                        <label for="buy_price">Buy price <span class="text-danger">*</span></label>
                        <input type="text" id="buy_price" name="buy_price" class="form-control" placeholder="Product buy price here..."/>
                        <span style="color: red">{{ $errors->has('buy_price') ? $errors->first('buy_price') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="price">Sale price <span class="text-danger">*</span></label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Product sale price here..."/>
                        <span style="color: red">{{ $errors->has('price') ? $errors->first('price') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="discount_price">Discount price</label>
                        <input type="text" id="discount_price" name="discount_price" class="form-control" placeholder="Product discount price here..."/>
                        <span style="color: red">{{ $errors->has('discount_price') ? $errors->first('discount_price') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="qty">QTY <span class="text-danger">*</span></label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="Product qty here..."/>
                        <span style="color: red">{{ $errors->has('qty') ? $errors->first('qty') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="sku">SKU <span class="text-danger">*</span></label>
                        <input type="text" id="sku" name="sku" class="form-control" placeholder="Product sku here..."/>
                        <span style="color: red">{{ $errors->has('sku') ? $errors->first('sku') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="short_description">Short description <span class="text-danger">*</span></label>
                        <textarea class="ckeditor form-control" id="short_description" name="short_description" placeholder="Enter short description"></textarea>
                        <span style="color: red">{{ $errors->has('short_description') ? $errors->first('short_description') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="long_description">Long description <span class="text-danger">*</span></label>
                        <textarea class="ckeditor form-control" id="long_description" name="long_description" placeholder="Enter long description"></textarea>
                        <span style="color: red">{{ $errors->has('long_description') ? $errors->first('long_description') : ' '  }}</span>
                    </div>

                    <div class="form-group">
                        <label for="image">Product image <span class="text-danger">*</span></label>
                        <input type="file" id="image" name="image" class="form-control"/>
                        <span style="color: red">{{ $errors->has('image') ? $errors->first('image') : ' '  }}</span>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endpush