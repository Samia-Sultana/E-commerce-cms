<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use App\Models\Productimage;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
   
    
    
    public function viewCart(Request $request){
        $sessionData = $request->session()->get('cart');
        
        
        return view('shopping_cart', compact('sessionData'));
    }
    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart  = $request->session()->has('cart')? $request->session()->get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('welcome');
    }
}