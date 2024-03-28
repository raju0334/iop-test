<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Stringable;

class ProductController extends Controller
{
    protected $productServices;

    public function __construct(ProductService $productServices)
    {
        $this->productServices = $productServices;
    }

   public function showProductList()
   {
    $products = Product::with('category')->get();
    return view('backend.pages.product.index',compact('products'));
   }

   public function showProductForm()
   {
    $categories = Category::all();
    return view('backend.pages.product.add', [
        'categories' => $categories
    ]);
   }

   public function productStore(ProductRequest $request)
   {
        $this->productServices->productStore($request);
        $this->setSuccessMessage('success', 'Product has been created');
        return redirect()->back();
   }

   public function productEdit($id)
   {
    $product = Product::find($id);
    $categories = Category::get();
    return view('backend.pages.product.edit', compact('product','categories'));
   }

   public function productUpdate(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $this->productServices->productUpdate($request, $product);
        $this->setSuccessMessage('info', 'product has been updated');
        return redirect()->back();
    }


   public function productDestroy($id)
   {
       $product = Product::find($id);
       $product->delete();
       $this->setSuccessMessage('warning', 'product has been deleted');
       return redirect()->back();
   }



}
