<?php

use App\Http\Controllers\SalesController;
use App\Http\Controllers\Controller;
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
    return redirect('/dashboard');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/profile', [Controller::class, 'profile'])->middleware(['auth'])->name('profile');

Route::get('/sales', [SalesController::class, 'create'])->middleware(['auth'])->name('sales');

Route::post('/sales/product', [SalesController::class, 'store'])->middleware(['auth'])->name('product');


require __DIR__.'/auth.php';
