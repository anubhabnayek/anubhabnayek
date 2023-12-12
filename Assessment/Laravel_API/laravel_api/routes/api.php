<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    echo "Hello";
});



Route::get('/user',[userController::class,'allshow']); // datafetch  http://127.0.0.1:8000/api/student/
Route::get('/user/{id}',[userController::class,'single_show']); // edit http://127.0.0.1:8000/api/student/1
Route::delete('/user/{id}',[userController::class,'destroy']); // delete
Route::post('/insertuser',[userController::class,'store']); // insert
Route::put('/updateuser/{id}',[userController::class,'update']); // update
Route::post('/login',[userController::class,'userlogin']); // login