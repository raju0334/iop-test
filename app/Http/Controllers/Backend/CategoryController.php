<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Services\CategoryService;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    public function showCategoryList(CategoryService $categories)
    {
        $categories = $categories->categoryList();
        return view('backend.pages.category.index', compact('categories'));
    }

    public function showCategoryForm()
    {
        return view('backend.pages.category.add');
    }

    public function categoryEdit($id)
    {
        $category = Category::find($id);
        return view('backend.pages.category.edit', compact('category')); 
    }

    public function categoryStore(CategoryStoreRequest $request, CategoryService $services )
    {
       $services->categoryStore($request);

        $this->setSuccessMessage('success','Category has been added');
            
        return redirect()->back();
    }

    public function categoryUpdate(Request $request,$id,CategoryService $categoryService)
    {
        $category = Category::find($id);
        $categoryService->categoryDataUpdate($category,$request);
        $this->setSuccessMessage('success','Category has been updated');
            return redirect()->back(); 
    }

    public function categoryDestroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        $this->setSuccessMessage('success','Category has been deleted');
            return redirect()->back(); 
    }
}
