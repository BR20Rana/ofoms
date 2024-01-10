<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home()
{
    return view ('admin.master');
}
public function dashboard()
{
    return view ('admin.pages.dashboard');
}

}
