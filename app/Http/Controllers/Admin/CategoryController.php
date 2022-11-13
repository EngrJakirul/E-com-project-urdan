<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories, $category;

    public function addCategory()
    {
        return view('admin.category.add-category.index');
    }


    public function deleteCategory($id)
    {
        $this->category = Category::find($id);
        if(file_exists($this->category->image))
        {
            unlink($this->category->image);
        }
        $this->category->delete();
        return redirect('/manage-category')->with('message','category delete successfully');
    }



    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit-category.index', ['category' =>$this->category]);
    }



    public function updateCategory(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'category update successfully');
    }

    public function newCategory(Request $request)
    {
        Category::newCategory($request);
        return redirect('/add-category')->with('message', 'category save successfully');

    }


    public function manageCategory()
    {
        $this->categories = Category::orderBy('id','DESC')->get();
        return view('admin.category.manage-category.index', ['categories' =>$this->categories]);
    }




}
