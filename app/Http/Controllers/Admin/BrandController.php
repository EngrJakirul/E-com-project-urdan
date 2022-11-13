<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands, $brand;
    public function addBrand()
    {
        return view('admin.brand.add-brand.index');
    }


    public function deleteBrand($id)
    {
        return view('admin.brand.add-brand.index');
    }


    public function editBrand($id)
    {
        return view('admin.brand.edit-brand.index');
    }


    public function updateBrand(Request $request, $id)
    {
        return view('admin.brand.edit-brand.index');
    }


    public function newBrand(Request $request)
    {

        Brand::newBrand($request);
        return redirect('/add-brand')->with('message','Brand added successfully');
    }


    public function manageBrand()
    {
        $this->brands = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.manage-brand.index', ['brands' => $this->brands]);
    }
}
