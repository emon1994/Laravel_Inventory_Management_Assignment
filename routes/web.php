<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/',function(){
    return view('welcome');
})->middleware('guest');

Route::get('/product',[ProductController::class, 'show_product'])->middleware('auth');
Route::get('/add-product',[ProductController::class, 'add_product'])->middleware('auth');
Route::post('/store-product',[ProductController::class, 'store_product']);
Route::get('/edit-product/{id}',[ProductController::class, 'edit_product'])->middleware('auth');
Route::post('/update-product/{id}',[ProductController::class, 'update_product']);
Route::get('/delete-product/{id}',[ProductController::class, 'delete_product']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
