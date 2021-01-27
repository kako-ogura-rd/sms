<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;
use App\Http\Controllers\EmployeeController as Employee;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [Student::class, 'index'])->name('home');
Route::get('/detail/{id}',[Student::class, 'show']);
Route::get('/edit/{id}',[Student::class, 'edit']);
Route::post('/update/{id}',[Student::class, 'update']);

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/create',[Student::class, 'create']);
    Route::post('/store',[Student::class, 'store']);
});
