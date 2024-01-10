<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendCategoryController extends Controller
{
    public function explorefood()
    {
        return view('frontend.pages.category.explorefood');
    }

    public function foodmenu ()
    {
        $menus = Menu::all();
        // dd($menus);
        return view('frontend.pages.category.foodmenu', compact('menus'));
    }
    public function foodpackage ()
    { 
       $packages = Package::all();
        //dd($packages);
        return view('frontend.pages.category.package', compact('packages'));
    }

   
}
