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
// Route::resource('students', StudentController::class);

// Route::resource('companies', CompaniesController::class);

Route::get('/', function () {
 
    return view('welcome');
});
Auth::routes();

Route::get('/', function () {
    if(auth()->user()){
        auth()->user()->assignRole('admin');
    }
    return view('welcome');
});

Route::resource('/home', HomeController::class);
Route::get('/home/approve/{id}', [
    'as' => 'home.approve',
    'uses' => 'HomeController@approve'
]);
