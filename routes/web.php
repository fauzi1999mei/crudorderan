<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\agentController;

use App\Http\Controllers\productController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\topagentController;
use App\Http\Controllers\topcustomerController;


use Illuminate\Support\Facades\Route;

use App\Models\Login;
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
Route::get('/welcome', function () {
    return view('welcome');
});

// login
Route::get('/', function () {
    return view('login.index');
});

Route::post('/', function(){
    Login::create([
        'email'=> request('email'),
        'password'=> request('password')
    ]);
    return redirect('/user');

});


// layout

// route user
// customer
Route::get('/user',[userController::class,'index']);
// agent
Route::get('/agent',[agentController::class,'index']);

// nomor 2
Route::get('/product',[productController::class,'index']);

// nomor 3
Route::get('/order',[orderController::class,'index']);


// nomor 4
Route::get('/laporan',[reportController::class,'index']);
// Route::get('/Topproduct',[topproductController::class,'index']);

Route::get('/Topcustomer',[topcustomerController::class,'index']);


Route::get('/Topagent',[topagentController::class,'index']);

