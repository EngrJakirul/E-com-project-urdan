<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    protected $product;
    public function addToCart(Request $request)
    {
        $this->product = Product::find($request->product_id);

        Cart::add([
             'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->selling_price,
            'quantity' => $this->product->qtybutton,
//            'attributes' => [
//                'image' => $this->product->image,
//            ],
        ]);

        return Cart::getContent();

//        return redirect()->back()->with('message', 'cart add successfully');

    }
}
