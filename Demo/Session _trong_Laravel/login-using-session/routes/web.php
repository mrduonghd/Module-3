<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return view('welcome');
});

Route::prefix('login')->group(function(){
    Route::get('', [LoginController::class , 'index'])->name('show.login');
    Route::get('form', [LoginController::class , 'showFormLogin'])->name('form.login');
    Route::post('form', [LoginController::class , 'store'])->name('login.store');
    Route::get('blog', [BlogController::class, 'showBlog'])->name('blog');
    Route::get('logout', [BlogController::class, 'logout'])->name('user.logout');

    
});
