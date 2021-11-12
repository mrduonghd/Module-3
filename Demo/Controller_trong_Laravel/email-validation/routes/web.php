<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
Route::middleware('isLogin')->group(function(){
    Route::get('/home', function () {
        return view('welcome');
    });

    Route::get('home' ,[UserController::class, 'index'])->name('user.index');
});



Route::get('/login', function(){
    return view('login');
})->name('showFormLogin');

Route::post('/login', function(Request $request){
    // dd($request);
    $username = $request->name;
    $pwd = $request->pass;

    if($username = 'admin' && $pwd = 'admin'){
        session()->push('isLogin', true);
        return view('welcome');
    }else{
        return redirect('login');
    }
});