<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
       public function list()
       {
         return view('admin.pages.shop.list');
       }

   
       public function store(Request $request)
       {
        dd($request->all());
       }
}