<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use App\Models\Productimage;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{   
    
    public function addToCart(Request $request, $id){
        dd($id);
        $product = Product::findOrfail($id);
        $id = $id;
        $name = $request->product_name;
        $qty = $request->quantity;
        $price =  $product->price;
        $options = [
            'thumbnailImage' => $product->image1
            ];
        Cart::add($id, $name, $qty, $price, 0, $options);
        dd('successfully added item on cart');
    }
}
