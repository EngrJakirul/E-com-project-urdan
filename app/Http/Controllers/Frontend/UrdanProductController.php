<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;
use Illuminate\Http\Request;

class UrdanProductController extends Controller
{
    private $product;
    private $relatedProducts;
    private $subImages;
    public function productDetails($id)
    {
        $this->product = Product::find($id);
        $this->relatedProducts = Product::where('category_id', $this->product->category_id)->take(4)->get();
        $this->subImages = SubImage::where('product_id', $this->product->id)->get();
        return view('front.product.details.index', [
            'product' => $this->product,
            'relatedProducts' => $this->relatedProducts,
            'subImages' => $this->subImages,
        ]);

    }
}
