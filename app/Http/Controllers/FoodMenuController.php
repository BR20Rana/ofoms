<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    public function food()
    {
        //dd('habijabi');
        return view ('frontend.partials.foodmenu');
    }
}
