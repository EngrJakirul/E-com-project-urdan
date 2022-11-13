<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubImage;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $subCategories, $product;


    public function addProduct()
    {
        return view('admin.product.add-product.index', [
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
        ]);
    }

    public function getSubCategoryId($id)
    {
        $this->subCategories = SubCategory::where('category_id', $id)->get();
        return json_encode($this->subCategories);
    }

    public function newProduct(Request $request)
    {

        $this->product = Product::newProduct($request);
        SubImage::newSubImage($this->product, $request);
        return redirect()->back()->with('message', 'new product created successfully');

    }

    public function deleteProduct()
    {

    }

    public function editProduct()
    {

    }

    public function updateProduct()
    {

    }


    public function manageProduct()
    {
        return view('admin.product.manage-product.index');

    }



}
