<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dict', function () {
    return view('dictionary');
});

Route::post('/dict', function(Request $request){
    $arr = [
        'cat' => 'com meo',
        'dog' => 'con cho',
        'bird' => 'con chim',
        'tiger' => 'con ho',
        'bear' => 'con gau'
    ];

    foreach($arr as $key => $value){
        if($request->a == $key){
            return $value;
        }
    }
});