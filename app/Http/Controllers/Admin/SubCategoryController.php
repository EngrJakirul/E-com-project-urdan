<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subCategories, $subCategory;

    public function addSubCategory()
    {
        return view('admin.sub-category.add-category.index', ['categories' => Category::all()]);
    }

    public function deleteSubCategory($id)
    {
        $this->subCategory = SubCategory::find($id);
        if (file_exists($this->subCategory->image))
        {
            unlink($this->subCategory->image);
        }
        $this->subCategory->delete();
        return redirect('/manage-sub-category')->with('warning', 'Sub category deleted successfully');

    }

    public function editSubCategory($id)
    {
        $this->subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit-category.index', ['subCategory' =>$this->subCategory]);

    }

    public function updateSubCategory(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('success', 'Sub category updated successfully');

    }

    public function manageSubCategory()
    {
        $this->subCategories = SubCategory::orderBy('id','DESC')->get();
        return view('admin.sub-category.manage-category.index',['subCategories' => $this->subCategories]);

    }

    public function newSubCategory(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect('/add-sub-category')->with('message', 'Sub category created successfully');

    }

}
