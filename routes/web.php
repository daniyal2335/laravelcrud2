<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControler;

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
Route::get('register', function () {
    return view('insert');
});
Route::post('register',[MyControler::class,'insertData']);
Route::get('select2',[MyControler::class,'selectData']);
Route::get('edit/{id}',[MyControler::class,'showData']);
Route::post('edit/{id}',[MyControler::class,'updateData']);
