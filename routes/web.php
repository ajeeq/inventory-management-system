<?php

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
    return view('auth');
});

// //Data Entry
// Route::get('/entry', function () {
//     return view('entry');
// });

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dashboard','HomeController@chart');

//Assets
Route::resource('assets','AssetController');
// Route::get('datatable', 'AssetsController@getIndex');
Route::get('assets-list', 'AssetController@assetsList');
Route::PUT('assets', 'AssetController@store');
Route::PUT('assets/{id}/edit', 'AssetController@update');

// Staffs
Route::resource('assets.staffs','StaffController');

// Maintenance & Services
Route::resource('assets.services','ServiceController');

//Preventive Maintenance
Route::resource('assets.prevs','PrevController');

//Disposals
Route::resource('disposals','DisposalController');