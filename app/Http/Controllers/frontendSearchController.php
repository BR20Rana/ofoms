<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class frontendSearchController extends Controller
{
    public function home()
    {
        $products=Product::all();
        // dd($products);
        return view('frontend.master',compact('products'));
    }


    public function search(Request $request)
    {
        // dd(request()->all())

        if($request->search)
        {
            $products=Product::where('name','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $products=Product::all();
        }

        return view("frontend.pages.search",compact('products'));
    }
}

