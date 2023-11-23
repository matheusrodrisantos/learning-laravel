<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('index');
});

Route::get('/charles/{id}',function(){
    
    return 'teste';
});

Route::prefix('produtos')->group(function(){
    Route::get('/',[ProductsController::class, 'index'])->name('product.index');
    Route::get('/add',[ProductsController::class, 'index'])->name('product.index');
});