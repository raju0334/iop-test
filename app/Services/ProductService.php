<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{
     public function productStore($request)
     {
        if($request->file('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move('image/products', $imageName);
        }

        $product = Product::create([
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'slug'=> Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => url('image/products'. $imageName),
        ]);
        return $product;
     }  




     public function productUpdate($request, $product)
     {
         if($request->hasFile('image')){
             if(file_exists(public_path('images/products/'.$product->image))){
                 unlink(public_path('images/products/'.$product->image));
             }else{
                 $image = $request->file('image');
                 $imageName = time().'.'.$image->extension();
                 $image->move('images/products/', $imageName);
                 $product->image = url('images/products/'.$imageName);
             }
         }
 
         $product->update([
             'cat_id' => $request->cat_id,
             'name' => $request->name,
             'slug' => Str::slug($request->name),
             'buy_price' => $request->buy_price,
             'price' => $request->price,
             'discount_price' => $request->discount_price,
             'qty' => $request->qty,
             'sku' => $request->sku,
             'short_description' => $request->short_description,
             'long_description' => $request->long_description
         ]);
 
         return $product;
     }
     
 

}