<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');

Route::get('all',[BookController::class, 'showAll'])->name('books.showAll');
Route::get('detail/{id}',[BookController::class, 'detail'])->name('books.detail');

Route::prefix('login')->group(function(){
    Route::get('',function(){
        return view('login');
    })->name('showFormLogin');
    Route::post('',[AuthController::class, 'login'])->name('auth.login');
    Route::get('register', [UserController::class, 'rgt'])->name('rgt');
    Route::post('register', [UserController::class , 'register'])->name('register');
});


Route::get('/auth/redirect/{provider}', [SocialController::class,'redirect']);
Route::get('/callback/{provider}',[SocialController::class, 'callback']);

Route::prefix('forgetPwd')->group(function(){
    Route::get('', [UserController::class, 'showFgPwdForm'])->name('forget.password.get');
    Route::post('', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');

});

Route::prefix('carts')->group(function(){
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('carts.add-to-cart');
    Route::get('show-cart', [CartController::class, 'showCart'])->name('carts.show-cart');
    Route::get('update-cart', [CartController::class, 'updateCart'])->name('carts.update-cart');
    Route::get('delete-cart', [CartController::class, 'deleteCart'])->name('carts.delete-cart');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function(){
        Route::prefix('books')->group(function(){
            Route::get('',[BookController::class, 'index'])->name('books.index');
            Route::get('create',[BookController::class, 'create'])->name('books.create');
            Route::post('store',[BookController::class, 'store'])->name('books.store');
            Route::get('edit/{id}',[BookController::class, 'edit'])->name('books.edit');
            Route::post('edit/{id}',[BookController::class, 'update'])->name('books.update');
            Route::get('delete/{id}',[BookController::class, 'destroy'])->name('books.destroy');
        });

        Route::prefix('categories')->group(function(){
            Route::get('' , [CategoryController::class , 'index'])->name('categories.index');
            Route::get('create' , [CategoryController::class , 'create'])->name('categories.create');
            Route::post('store' , [CategoryController::class , 'store'])->name('categories.store');
            Route::get('edit/{id}' , [CategoryController::class , 'edit'])->name('categories.edit');
            Route::post('edit/{id}' , [CategoryController::class , 'update'])->name('categories.update');
            Route::get('delete/{id}' , [CategoryController::class , 'destroy'])->name('categories.destroy');
        });

        Route::prefix('authors')->group(function(){
            Route::get('' , [AuthorController::class , 'index'])->name('authors.index');
            Route::get('create' , [AuthorController::class , 'create'])->name('authors.create');
            Route::post('store' , [AuthorController::class , 'store'])->name('authors.store');
            Route::get('edit/{id}' , [AuthorController::class , 'edit'])->name('authors.edit');
            Route::post('edit/{id}' , [AuthorController::class , 'update'])->name('authors.update');
            Route::get('delete/{id}' , [AuthorController::class , 'destroy'])->name('authors.destroy');
        });

        Route::prefix('users')->group(function(){
            Route::get('', [UserController::class, 'index'])->name('users.index');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
        });
    });

    Route::get('logout', [AuthController::class , 'logout'])->name('logout');
});