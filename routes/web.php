<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


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
    return view('auth.login');
});

Auth::routes(["register" => false]);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('can:dashboard');

//Route::resource('users', UserController::class)->middleware('can:users.index');
Route::resource('customers', CustomerController::class)->middleware('can:customers.index');
Route::resource('providers', ProviderController::class)->middleware('can:providers.index');
Route::resource('products', ProductController::class)->middleware('can:products.index');

