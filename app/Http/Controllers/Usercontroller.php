<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Usercontroller extends Controller
{
    public function login()
    {
        // dd('hfijh');
        return view ('admin.pages.user.login');
    }

    public function loginPost(Request $request)
    {
        // dd($request->all());
            $validator=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ]);

            if($validator->fails())
            {
                //message
                return redirect()->back()->withErrors($validator);
            }

            $credentials=$request->except('_token');
            

            $login=auth()->attempt($credentials);
            if($login)
            {
               return redirect()->route('home');
            }else{
                return redirect()->back()->withErrors('invalid user email or password');

            }

    }
    public function logout(){
        auth()->logout();
        return view ('admin.pages.user.login');

    }
    public function adminprofile()
    {
        //dd('hello admin');
        return view ('admin.pages.user.profile');
    }

}
