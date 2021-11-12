<?php

use App\Http\Controllers\PostController;
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
Route::get('/', function() {
    return view('post.welcome');
})->name('home');

Route::prefix('posts')->group(function(){
    Route::get('', [PostController::class, 'index'])->name('posts.index');
    Route::get('create', [PostController::class, 'create'])->name('posts.create');
    Route::post('store', [PostController::class, 'store'])->name('posts.store');
});

Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');
