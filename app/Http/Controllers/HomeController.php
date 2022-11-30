<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Socialmedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $navigation = Navbar::all();
        $socialMedia = Socialmedia::all();
        return view('welcome',compact('navigation', 'socialMedia'));
    }
}
