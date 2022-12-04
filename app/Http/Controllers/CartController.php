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
}
