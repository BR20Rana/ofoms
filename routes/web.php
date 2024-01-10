<?php

//use App\Http\Controllers\AdminController;
use App\Models\registration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\FreshController;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\FrontendOrderController;
use App\Http\Controllers\FrontendCategoryController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Admin pannel routes


Route::get('/admin/login',[Usercontroller::class,'login'])->name('adminlogin');
Route::post('/admin/login/post',[Usercontroller::class,'loginPost'])->name('login.post');

Route::group(['middleware'=> 'auth'], function (){

Route::get('/admin/logout',[Usercontroller::class,'logout'])->name('admin.logout');

Route::get('/admin/profile', [Usercontroller::class, 'adminprofile'])->name('admin.profile');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('admin.dashboard');

Route::get('/customer/list',[CustomerController::class,'list'])->name('Customer_List');
Route::get('/customer/addcustomer',[CustomerController::class,'addcustomer'])->name('add.customer');
Route::post('/customer/store',[CustomerController::class,'customerstore'])->name('customer_store');

Route::get('/shop',[ShopController::class,'list'])->name('shop');

//Menus Route
Route::get('/menu',[MenuController::class,'list'])->name('menu');
Route::get('/menu/addmenu', [MenuController::class, 'menu'])->name('addmenu');
Route::post('/menu/store', [MenuController::class, 'storeMenu'])->name('store.menu');

Route::get('/menu/delete/{id}',[MenuController::class, 'delete'])->name('menu.delete');
Route::get('/menu/edit/{id}',[MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/update/{id}',[MenuController::class, 'update'])->name('menu.update');

//package routes
Route::get('/package',[packageController::class,'packagelist'])->name('package');
Route::get('/package/addpackage', [packageController::class, 'package'])->name('addpackage');
Route::post('/package/store', [packageController::class, 'storepackage'])->name('store.package');

Route::get('/package/delete/{id}',[packageController::class, 'delete'])->name('package.delete');
Route::get('/package/edit/{id}',[packageController::class, 'edit'])->name('package.edit');
Route::put('/package/update/{id}',[packageController::class, 'update'])->name('package.update');

//Route::match(['get', 'post'], '/menu/list', [MenuController::class, 'list'])->name('menu.list');

Route::get('/delivery/list',[DeliveryController::class,'list'])->name('delivery');
Route::get('/order/order',[DeliveryController::class,'orderlist'])->name('order.list');

Route::get('+',[AccountController::class,'login']);

Route::get('/customer/store',[AccountController::class,'customerlogin'])->name('custormer.store');
Route::post('/shop/store',[ShopController::class,'list'])->name('shop.store');

});


//Front_End Routes

Route::get('/customer/login', [frontendCustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/store', [frontendCustomerController::class, 'login_store'])->name('login.store');

Route::get('/registration', [frontendCustomerController::class, 'registration'])->name('customer.registration');
Route::post('/registration', [frontendCustomerController::class, 'registration_store'])->name('customer.store');

Route::group(['middleware' => 'custom.auth'], function () {
    // Your authenticated routes here
    Route::post('/customer/logout', [FrontendCustomerController::class, 'logout'])->name('customer.logout');

    Route::get('/home', [FrontendHomeController::class, 'home'])->name('front.home');
   // Route::post('/search', [FrontendHomeController::class, 'search'])->name('home.search');
    
    Route::get('/category', [FrontendCategoryController::class, 'explorefood'])->name('explore.food');
    Route::get('/food/foodmenu', [FrontendCategoryController::class, 'foodmenu'])->name('food.menu');
    
    Route::get('/food/foodmenu/foodorder/{id}', [FrontendOrderController::class, 'foodorder'])->name('order.food');
    Route::post('/food/foodmenu/foodorder', [FrontendOrderController::class, 'food_store'])->name('order.store'); 
    Route::get('/foodorder', [FrontendOrderController::class, 'foodorder_page'])->name('Foodorder');
    
    Route::get('/foodpackage', [FrontendCategoryController::class,'foodpackage'])->name('foodpackage');
    //Route::get('/food/foodpackage', [FrontendOrderController::class, 'package'])->name('food.package');

    //Route::get('/food/foodpackage/foodorder', [FrontendOrderController::class, 'foodpackage'])->name('food.package');
  
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::get('/index',[FreshController::class, 'index'])->name('index');