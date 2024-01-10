<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class FreshController extends Controller
{
    public function index()
    {
       // dd('hdfkjbaj');
        $packages = Package::all();
        //dd($packages);
        //return view('frontend.pages.category.package', compact('packages'));

        return view ('frontend.pages.category.example', compact('packages'));
    }
}
