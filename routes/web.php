<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Middleware\AdminAuth;

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
    return view('welcome');
});
Route::post('login',[UserController::class,'login']);
Route::post('excelDemo',[UserController::class,'readExcelData']);


Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.dashboard');
    });
    Route::get('/user', function () {
        return view('navigations.user_profile');
    });
    Route::get('/table', function () {
        return view('navigations.tables');
    });
    Route::get('/notification', function () {
        return view('navigations.notification');
    });
    Route::get('/icons', function () {
        return view('navigations.icons');
    });
    Route::get('/typography', function () {
        return view('navigations.typography');
    });

    Route::get('/products',[ProductsController::class,'loadProducts']);
    Route::get('/addProduct',[ProductsController::class,'addEditProduct']);
    Route::get('/customers',[CustomersController::class,'loadCustomers']);
    Route::get('/addCustomer',[CustomersController::class,'addEditCustomer']);
    
});


