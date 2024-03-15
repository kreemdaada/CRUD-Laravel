<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/product',[ProductController::class,'index'])->name('product.index');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

Route::post('/product',[ProductController::class,'store'])->name('product.store');

// Route für die Anzeige des Bearbeitungsformulars für ein Produkt
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

// Route für das update eines Produkts
Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');

// Route für das Löschen eines Produkts
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');