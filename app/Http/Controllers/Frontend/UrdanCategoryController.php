<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UrdanCategoryController extends Controller
{
    protected $products;
    private $product;
    public function categoryPage($id)
    {
        $this->products = Product::where('category_id', $id)->get();
        return view('front.category.index', [
            'products' =>  $this->products,
            'category' => Category::find($id),
        ]);
    }

    public function getProductInfoModal()
    {
        $this->product = Product::find($_GET['id']);
        $this->product->hit_count = $this->product->hit_count + 1;
        $this->product->save();
        return json_encode($this->product);
    }
}
