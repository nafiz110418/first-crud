<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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
Route::get('employee/create',[employeeController::class, 'create']);
Route::post('/employee',[employeeController::class, 'store']);
Route::get('/employee/delete/{id}',[employeeController::class, 'destroy']);
Route::get('/employee/{id}/edit',[employeeController::class, 'edit']);
Route::post('/employees/{id}',[employeeController::class, 'update']);
Route::get('/employees',[employeeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
