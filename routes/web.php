<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Site\userController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Auth;

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

// user routes
Route::get('/', [userController::class,"login"]);

// Route::get("/login",[userController::class,"login"])->name('login');//ellice
// Route::post("/postlogin",[userController::class,"postlogin"]);

// Route::get("/register",[userController::class,"register"]);
// Route::post("/postregister",[userController::class,"postregister"]);

// Route::get("/logout",[userController::class,"logout"]);

// dashboard routes
// Route::get("/admin",[adminController::class,"index"]);

// [testController::class,"index"]
Auth::routes();

Route::get('log', function(){
    return view('auth.login');
});

//
Route::group(['prefix' => '/admin'],
function() {
    // login routes
    Route::get('/login', [adminController::class, 'getlogin']);
    Route::post('/login', [adminController::class, 'login']);

    // dashboard routes
    Route::get('/', [dashboardController::class, 'index']);
    Route::get("/ecommerce/products",[dashboardController::class,"products"]);

});
// ecommerce routes
// Route::get("/ecommerce/addproduct",[ecommerceController::class,"add"]);
// Route::post("/ecommerce/store",[ecommerceController::class,"store"]);

//  Routes Front
// Route::get("/layout",[frontController::class,"index"]);
Route::group(['prefix' => '/saray'], function(){
    Route::get('/', [userController::class, 'index']);
});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
