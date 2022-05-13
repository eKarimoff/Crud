<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\CompaniesController;




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

Auth::routes();

Route::get('/', function () {
 
    return view('auth.login');
});

Route::get('/home', function () {
    return view('auth.login');
});

Route::resource('students', StudentController::class);

Route::resource('companies', CompaniesController::class);



