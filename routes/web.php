<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('list');
});
Route::prefix('Demo')->group(function(){
    Route::get('index', [DemoController::class,'index'])->name('Demo.index');
    Route::get('create', [DemoController::class,'create'])->name('Demo.create');
    Route::post('store', [DemoController::class,'store'])->name('Demo.store');
    Route::get('edit/{id}', [DemoController::class,'edit'])->name('Demo.edit');
    Route::put('update/{id}', [DemoController::class,'update'])->name('Demo.update');
    Route::delete('destroy/{id}', [DemoController::class,'destroy'])->name('Demo.destroy');
});
