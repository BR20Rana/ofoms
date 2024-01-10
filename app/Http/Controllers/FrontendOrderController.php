<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Facade\Ignition\Support\Packagist\Package;
use App\Library\SslCommerz\SslCommerzNotification;

class FrontendOrderController extends Controller
{
    public function foodorder($id)
    {
        $menus = Menu::find($id);
        return view ('frontend.pages.order.foodorder', compact('menus'));
    }

  /*public function package()
  {
    return view('frontend.pages.category.package');
  }*/
    



    public function food_store (Request $request)
    { 
         //dd($request->all());
       $order= Order::create([
            'qty' => $request->qty,
            'price' => $request->total_price,
            'full_name' => $request->full_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address
        ]);
        
        $this->payonline($order);
        return redirect()->route('front.home');


        // return view('frontend.pages.category.foodmenu');
        // dd('jone');
    }

    public function payonline($order)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = (int)$order->price * $order->qty; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->full_name;
        $post_data['cus_email'] = $order->email;
        $post_data['cus_add1'] = $order->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->update([
                'payment_status'=>'pending',
                'status' => 'Pending',
                'transaction_id' => $post_data['tran_id'],
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function foodorder_page()
    {
        return view('frontend.pages.category.foodmenu');
    }
}
