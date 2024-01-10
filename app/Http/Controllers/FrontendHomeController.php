<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
   /*public function home()
   {
    return view ('frontend.master');
    
   }*/
// In your controller method
public function home()
{
    $welcomeMessage = "Welcome to Foodie. Order your desired food from Foodie. Good food, good health.";

    return view('frontend.master', compact('welcomeMessage'));
}
/*public function home()
{
    $foodOrderId = 123; // Replace with your actual value or logic
    return view('frontend.master', compact('foodOrderId'));
}*/
}

