<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller
{
    public function list()
    {   
        $customerdata=User::all();
        // dd($customerdata);
        return view ('admin.pages.customer.list', compact('customerdata'));
    }
    public function addcustomer()
    {
        return view ('admin.pages.customer.addcustomer');
    }
    

    public function customerstore(Request $request)
    {
        Customer::create([
            'customer_name'=>$request->customername ,
            'customer_email'=>$request->customeremail ,
            'address'=>$request->customeraddress ,
            'phone'=>$request->customerpnumber,
        ]);
        // return redirect()->back();
        return redirect(route('Customer_List'));
    } 
}