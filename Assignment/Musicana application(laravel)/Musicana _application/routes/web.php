<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[userController::class,'index']);
Route::get('/about', function () {
    return view('website/about');
});

Route::get('/signup',[userController::class,'create']);
Route::post('/signup',[userController::class,'store']);

Route::get('/contact',[contactController::class,'create']);
Route::post('/contact',[contactController::class,'store']);

Route::get('/signin',[userController::class,'login']);
Route::post('/login_auth',[userController::class,'login_auth']);


    



Route::get('/blog', function () {
    return view('website/blog');
});

Route::get('/track', function () {
    return view('website/track');
});




