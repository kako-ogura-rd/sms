<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;

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

Route::get('/',[Student::class, 'index']);
Route::get('/create',[Student::class, 'create']);
Route::get('/edit/{id}',[Student::class, 'edit']);
//Route::get('/show/{id}',"Student@show");
Route::post('/store',[Student::class, 'store']);
Route::post('/update/{id}',[Student::class, 'update']);
