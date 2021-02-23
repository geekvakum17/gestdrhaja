<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

//route('dashboard');
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('user', 'UserController');
Route::resource('direction', 'DirectionController');
Route::resource('agenceregional', 'AgenceregionalController');
Route::resource('grade', 'GradeController');
Route::resource('sous-direction', 'Sous-directionController');
Route::resource('service', 'ServiceController');
/* route('login')
route('register')
route('logout') */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
