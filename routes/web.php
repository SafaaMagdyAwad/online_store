<?php

use App\Http\Controllers\ClientProducrController;
use App\Http\Controllers\ClientProductController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//register client
Route::get('rigister',[UserController::class,'rigister_form'])->name('user.rigister_form');
Route::post('rigister',[UserController::class,'rigister'])->name('user.rigister');






Route::group(["middleware"=> "admin"], function () {

    //rigister admin
    Route::get('adminrigister/{id}',[UserController::class,'adminrigister_form'])->name('user.adminrigister_form');
    Route::post('adminrigister/{id}',[UserController::class,'adminrigister'])->name('user.adminrigister');
    

    //add product
    Route::get('add_form/{user_id}',[productController::class,'add_form'])->name('product.add_form');
    Route::post('add/{user_id}',[productController::class,'add'])->name('product.add');
    
    Route::delete('delete/{productid}/{userid}',[productController::class,'delete'])->name('product.delete');
    
    
    //update product
    Route::get('update_form/{productid}/{userid}',[productController::class,'update_form'])->name('product.update_form');
    Route::put('update/{productid}/{userid}',[productController::class,'update'])->name('product.update');
    Route::get('adminproducts/{id}',[productController::class,'show_all'])->name('product.all');
} );   



Route::group(["middleware"=> "client"], function () {
    
    
    Route::get('buy_product_form/{user_id}/{product_id}',[ClientProductController::class,'buy_product_form'])->name('client_product_form.buy');
    Route::post('buy_product_form/{use}/buy_product/{user_id}/{product_id}',[ClientProductController::class,'buy_product'])->name('client_product.buy');
    
    Route::delete('deleteuserproduct/{user_id}/{product_id}',[ClientProductController::class,'delete'])->name('userproduct.delete');
    
    Route::get('bill/{user_id}',[ClientProductController::class,'show_bill'])->name('user.bill');
    
    Route::get('/bankform/{user_id}/{total_price}',[ClientProductController::class,'pay_bill_form'])->name('user.payform');
    Route::post('/bank/{user_id}/{total_price}',[ClientProductController::class,'pay_bill'])->name('user.pay');
    
    Route::get('userproducts/{id}',[productController::class,'show_all_client'])->name('userproduct.all');
    
    

});


Route::post('sarch_product/{id}',[productController::class,'search'])->name('product.search');


//login client | admin
Route::get('login',[UserController::class,'login_form'])->name('user.login_form');
Route::post('login',[UserController::class,'login'])->name('user.login');

Route::get('logout/{id}',[UserController::class,'logout'])->name('user.logout');//for both client and admin





