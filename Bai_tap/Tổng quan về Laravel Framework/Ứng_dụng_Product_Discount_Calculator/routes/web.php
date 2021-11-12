<?php

use App\Http\Controllers\ProductController;
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

Route::get('/disc', function () {
    return view('disc');
});
// Route::get('/disc', [ProductController::class, 'index']);

Route::post('/disc', function (Illuminate\Http\Request $request) {
    $dAmount = $request->b * $request->c * 0.1;
    return view('show_discount_amount', compact(['dAmount']));
});
