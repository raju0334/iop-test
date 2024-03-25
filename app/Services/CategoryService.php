<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function categoryStore($request)
    {
        $category = Category::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
           ]);
           return $category;
    }

    public function categoryList()
    {
        return Category::all();
    }

    public function categoryDataUpdate($category,$request)
    {
        $categoryData = $category->update([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
           ]);
           return $categoryData;
    }
}