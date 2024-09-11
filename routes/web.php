<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () { return view('home'); })->name('home.index');
Route::get('/about', function () { return view('about'); })->name('about.index');
Route::get('/single-product-1', function () { return view('products1.product-1'); })->name('product1.show');
Route::get('/single-product-2', function () { return view('products1.product-2'); })->name('product2.show');
Route::get('/single-product-3', function () { return view('products1.product-3'); })->name('product3.show');
Route::get('/single-product-4', function () { return view('products1.product-4'); })->name('product4.show');
Route::get('/single-product-5', function () { return view('products1.product-5'); })->name('product5.show');
Route::get('/single-product-6', function () { return view('products1.product-6'); })->name('product6.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
