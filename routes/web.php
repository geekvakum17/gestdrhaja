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

Route::post('/phone', 'SessionController@store')->name('phone');

Route::resource('user', 'UserController');

Route::resource('direction', 'DirectionController');

// Route::get('/direction','DirectionController@index')->name('direction.index');
// Route::post('/direction','DirectionController@store')->name('direction.store');
// Route::get('/direction/create','DirectionController@create')->name('direction.create');
// Route::get('/direction/{id}','DirectionController@edit')->name('direction.edit');
// Route::put('/direction/{id}/update','DirectionController@update')->name('direction.update');



Route::resource('poste', 'PosteController');

Route::resource('agenceregional', 'AgenceregionalController');
Route::resource('grade', 'GradeController');
Route::resource('sousdirection', 'SousdirectionController');
Route::resource('services', 'ServiceController');
Route::resource('user', 'UserController');
Route::group(['prefix'=>'Session','as'=>'session.'], function () {
    Route::post('/login', 'SessionController@login')->name('login');
});
/* route('login')
route('register')
route('logout') */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
