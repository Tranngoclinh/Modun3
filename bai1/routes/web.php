<?php

use App\Http\Controllers\DichController;
use App\Http\Controllers\DiscountPercentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

/*
|-----------------------------------use Illuminate\Http\Request;---------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/nhap',function(){
    return view('tinh');
});
Route::post('/nhap',[DiscountPercentController::class,'index'])->name('show');


Route::get('/dich',function(){
    return view('dich');
});
Route::post('/dich',[DichController::class,'index'])->name('showdich');