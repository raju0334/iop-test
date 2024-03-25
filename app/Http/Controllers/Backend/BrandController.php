<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Models\Brand;
use App\Services\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showBrandList(BrandService $brands )
    {
        $brands = $brands->brandList();
        return view('backend.pages.brand.index',compact('brands'));
    }

    public function showBrandForm()
    {
        return view('backend.pages.brand.add');
    }

    public function brandEdit($id)
    {
        $brand = Brand::find($id);
        return view('backend.pages.brand.edit', compact('brand'));
    }

    public function brandStore(BrandStoreRequest $request,BrandService $services)
    {
        $services->brandStore($request);
        $this->setSuccessMessage('success', 'Brand has been added');
        return redirect()->back();
    }

    

    public function brandUpdate(Request $request,$id, BrandService $brandService)
    {   
        $brand = Brand::find($id);
        $brandService->brandUpdate($brand, $request);
        $this->setSuccessMessage('success', 'Category has benn updated');
        return redirect()->back();
    }

    public function brandDestroy($id)
    {   
        $brand = Brand::find($id);
        $brand->delete();
        $this->setSuccessMessage('success', 'Category has benn deleted');
        return redirect()->back();
    }


}
