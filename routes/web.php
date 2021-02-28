<?php

use Illuminate\Support\Facades\Route;
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
    return view('dashboard/dashboard');
});
Route::get('/user', function () {
    return view('navigations/user_profile');
});
Route::get('/table', function () {
    return view('navigations/tables');
});
Route::get('/notification', function () {
    return view('navigations/notification');
});
Route::get('/icons', function () {
    return view('navigations/icons');
});
Route::get('/typography', function () {
    return view('navigations/typography');
});

Route::post('login',[UserController::class,'login']);
