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
// Route::get('/', 'DashboardController@index')->name('dashboard');

Route::post('/phone', 'SessionController@store')->name('phone');

// Route::resource('user', 'UserController');

// Route::resource('direction', 'DirectionController');

// Route::resource('guichet', 'GuichetController');




/* Route::resource('poste', 'PosteController');
Route::resource('demande', 'DemandeController');
Route::resource('absence', 'AbsenceController');
Route::resource('statu', 'StatuController'); */

/* Route::resource('agenceregional', 'AgenceregionalController');
Route::resource('grade', 'GradeController');
Route::resource('sousdirection', 'SousdirectionController');
Route::resource('services', 'ServiceController');
Route::resource('user', 'UserController');
Route::group(['prefix'=>'Session','as'=>'session.'], function () {
    Route::post('/login', 'SessionController@login')->name('login');
});
 */
Route::resource('statu', 'StatuController');
Route::resource('grade', 'GradeController');
Route::resource('services', 'ServiceController');
Route::resource('guichet', 'GuichetController');
Route::resource('agenceregional', 'AgenceregionalController');
Route::resource('sousdirection', 'SousdirectionController');
Route::resource('direction', 'DirectionController');
Route::resource('poste', 'PosteController');
Route::resource('user', 'UserController');

Route::group(['prefix'=>'Session','as'=>'session.'], function () {
    Route::post('/login', 'SessionController@login')->name('login');
});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
