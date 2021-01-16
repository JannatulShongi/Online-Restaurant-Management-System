<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;
use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\frontend\ItemsController;
use App\Models\Item;
use App\Models\Employees;
use App\Http\Controllers\frontend\HomesController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Order\OrderController;
use App\Models\Order;
use App\Http\Controllers\Order\OrderDetailsController;
use App\Http\Controllers\Delivery\DeliveryManController;
use App\Http\Controllers\frontend\UsersController;
use App\Http\Controllers\frontend\OrdersController;
use App\Models\OrderDetails;
use App\Http\Controllers\Registration\RegistrationController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Support\SupportController;

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

// Route::get('/admin', function () {
//     return view ('master');
// });

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginProcess'])->name('login.do');


Route::group(['middleware'=>['auth','admin']],function (){

Route::get('/admin',[DashboardController::class,'dashboard'])->name('backend.dashboard.dashboard');
//category

Route::get('/backend/category/create',[CategoryController::class,'create'])->name('backend.category.create');
Route::get('/backend/category/list',[CategoryController::class,'list'])->name('backend.category.list');
Route::post('/backend/category/store',[CategoryController::class,'store'])->name('backend.category.store');
Route::get('/backend/category/edit/{id}',[CategoryController::class,'edit'])->name('backend.category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('category/view/{id}',[CategoryController::class,'view'])->name('category.view');
Route::get('/backend/category/show/{id}',[CategoryController::class,'show'])->name('backend.category.show');


//Item
Route::get('/backend/item/create',[ItemController::class,'create'])->name('backend.item.create');
Route::get('/backend/item/list',[ItemController::class,'list'])->name('backend.item.list');
Route::post('backend/store',[ItemController::class,'store'])->name('backend.store');
Route::get('/edit/{id}',[ItemController::class,'edit'])->name('backend.item.edit');
Route::post('/update/{id}',[ItemController::class,'update'])->name('update');
Route::get('/delete/{id}',[ItemController::class,'delete'])->name('delete');
Route::get('/item/view{id}',[ItemController::class,'view'])->name('view');

//employee

Route::get('/backend/employee/create',[EmployeeController::class,'create'])->name('backend.employee.create');
Route::get('/backend/employee/list',[EmployeeController::class,'list'])->name('backend.employee.list');
Route::post('employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/backend/employee/edit/{id}',[EmployeeController::class,'edit'])->name('backend.employee.edit');
Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');
Route::get('/backend/employee/view/{id}',[EmployeeController::class,'view'])->name('backend.employee.view');

//customer
Route::get('/backend/customer/create',[CustomerController::class,'create'])->name('backend.customer.create');
Route::get('/backend/customer/list',[CustomerController::class,'list'])->name('backend.customer.list');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/backend/customer/edit/{id}',[CustomerController::class,'edit'])->name('backend.customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

//order
Route::get('/backend/order/create',[OrderController::class,'create'])->name('backend.order.create');
Route::get('/backend/order/list',[OrderController::class,'list'])->name('backend.order.list');
Route::post('/order/store',[OrderController::class,'store'])->name('order.store');
Route::get('/backend/order/view/{id}',[OrderController::class,'view'])->name('backend.order.view');
Route::get('/backend/order/edit/{id}',[OrderController::class,'edit'])->name('backend.order.edit');
Route::post('/backend/update/{id}',[OrderController::class,'update'])->name('backend.update');
Route::get('/backend/order/invoive/{id}',[OrderController::class,'invoice'])->name('backend.order.invoice');


//order_details
Route::get('/backend/order_details/create',[OrderDetailsController::class,'create'])->name('backend.order_details.create');


//report

Route::get('/backend/report/list',[ReportController::class,'list'])->name('backend.report.list');
Route::post('/backend/report/report',[ReportController::class,'report'])->name('report');
//Delivary Man
Route::get('/backend/delivery/create',[DeliveryManController::class,'create'])->name('backend.delivery.create');
Route::get('/backend/delivery/list',[DeliveryManController::class,'list'])->name('backend.delivery.list');
Route::post('/delivery/store/',[DeliveryManController::class,'store'])->name('delivery.store');

//registration
Route::get('/backend/registration/list',[UsersController::class,'list'])->name('backend.registration.list');
//support
Route::get('/backend/support/list',[SupportController::class,'list'])->name('backend.support.list');
Route::get('backend/suport/reply/{id}',[SupportController::class,'reply'])->name('backend.support.reply');
Route::post('/backend/support/send',[SupportController::class,'send'])->name('backend.support.send');
//Delivary Man
Route::get('/backend/delivery/create',[DeliveryManController::class,'create'])->name('backend.delivery.create');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

});


//frontend

//home
Route::get('/',[HomesController::class,'list'])->name('home');
//items
Route::get('/frontend/item/view/{id}',[ItemsController::class,'view'])->name('frontend.item.view');
Route::get('/frontend/item/cart',[ItemsController::class,'cart'])->name('frontend.item.cart');
Route::get('/frontend/item/addTocart/{id}',[ItemsController::class,'addTocart'])->name('frontend.item.addTocart');
Route::put('/addtocart',[ItemsController::class,'update'])->name('addtocart');

Route::get('/frontend/item/checkout',[ItemsController::class,'show'])->name('frontend.item.checkout');


Route::get('/frontnd/cart',[ItemsController::class,'checkout'])->name('frontend.cart');
Route::get('/addtocart/delete/{id}',[ItemsController::class,'delete'])->name('addtocart.delete');
Route::get('/addtocart/clear/',[ItemsController::class,'clear'])->name('cart.clear');
//registration
Route::post('/registration',[UsersController::class,'registration'])->name('user.registration');
Route::post('/user/login',[UsersController::class,'login'])->name('user.login');
Route::get('/user/logout',[UsersController::class,'logout'])->name('user.logout');
Route::get('/frontend/profile',[UsersController::class,'profile'])->name('frontend.login.profile');
//Route::get('user/view/porfile/{id}',[UsersController::class,'userProfile'])->name('user.view.profile');
//Route::get('/frontend/show',[UsersController::class,'show'])->name('frontend.show');
Route::post('/frontend/orders/comment/{id}',[UsersController::class,'comment'])->name('frontend.comment');

Route::get('/frontend/edit/{id}',[UsersController::class,'edit'])->name('frontend.login.edit');
Route::post('/frontend/update/{id}',[UsersController::class,'update'])->name('frontend.update');
Route::get('/frontend/password/{id}',[UsersController::class,'password'])->name('frontend.login.password');
Route::post('/frontend/updated/{id}',[UsersController::class,'updated'])->name('frontend.password');
//image
// Route::post('/frontend/upload/image',[UsersController::class,'image'])->name('frontend.upload.image');

//category
Route::get('frontend/category/view/{id}',[HomesController::class,'allView'])->name('frontend.category.view');
//support
Route::get('/frontend/support',[SupportController::class,'support'])->name('frontend.support.support');
Route::post('/frontend/support/message',[SupportController::class,'message'])->name('frontend.support.message');
Route::group(['middleware'=>'auth'],function (){
//order
Route::post('/order',[OrdersController::class,'order'])->name('order.place');
//Route::get('/order/details',[OrdersController::class,'orderdetails'])->name('order.details');

});


