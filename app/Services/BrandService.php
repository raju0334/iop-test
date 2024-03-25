<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandService
{
    public function brandStore($request)
    {
        $brand = Brand::create([
            'name' => ($request->name),
            'slug' => Str::slug($request->name),
        ]);
        return $brand;
    }

    public function brandUpdate($brand, $request)
    {
        $brand = $brand->update([
            'name' => ($request->name),
            'slug' => Str::slug($request->name),
        ]);
        return $brand;
    }
    
    public function brandList()
    {
        return Brand::all();
    } 


}