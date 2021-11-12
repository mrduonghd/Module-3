<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;
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

// Tạo 1 nhóm route với tiền tố customer
// Route::prefix('customer')->group(function () {
//     Route::get('index', function () {
//         // Hiển thị danh sách khách hàng
//         // return view('modules.customer.index');
//     });

//     Route::get('create', function () {
//         // Hiển thị Form tạo khách hàng
//     });

//     Route::post('store', function () {
//         // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//     });

//     Route::get('{id}/show', function () {
//         // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//     });

//     Route::get('{id}/edit', function () {
//         // Hiển thị Form chỉnh sửa thông tin khách hàng
//     });

//     Route::patch('{id}/update', function () {
//         // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//     });

//     Route::delete('{id}', function () {
//         // Xóa thông tin dữ liệu khách hàng
//     });
// });

Route::get('customers', [CustomerController::class, 'index']);


Route::prefix('task')->group(function(){
    Route::get('index', [TaskController::class, 'index'])->name('task.index');
    Route::get('create', [TaskController::class, 'create'])->name('task.create');
    Route::post('index', [TaskController::class, 'store'])->name('task.store');
    Route::get('{id}', [TaskController::class, 'show'])->name('task.show');
    Route::get('{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('{id}', [TaskController::class, 'update'])->name('task.update');
    Route::delete('{id}', [TaskController::class, 'destroy'])->name('task.destroy');
    Route::get('{id}', [TaskController::class, 'delete'])->name('task.delete');

});