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
    return view('login');
});

Route::get('/clearSS', function () {
    session()->forget('ac_status');
    session()->forget('ac_username');
    return redirect('/');
});

Route::post('/login', 'AccountController@actionLogin')->name('login');

Route::get('/admin', 'SchemeController@actionIndex');
Route::get('/manager', 'SchemeController@actionIndex');

Route::get('/addStaff', 'SchemeController@actionAddStaff')->name('addStaff');
Route::post('/InsertStaff', 'SchemeController@actionAddStaff')->name('InsertStaff');

Route::get('/editStaff/{id}', 'SchemeController@actionEditStaff')->name('editStaff');
Route::post('/UpdateStaff/{id}', 'SchemeController@actionEditStaff')->name('updateStaff');

Route::get('/deleteStaff/{id}', 'SchemeController@actionDeleteStaff')->name('deleteStaff');

//----------------------------------------------------


Route::get('/viewReport', 'ReportController@actionView')->name('viewStaff');
Route::any('/addReport', 'ReportController@actionAdd')->name('addReport');

Route::any('/editReport/{id}', 'ReportController@actionEdit')->name('editReport');
Route::any('/deleteReport/{id}', 'ReportController@actionDelete')->name('deleteReport');

//Route::get('/bookView', 'BookController@home');
//Route::get('/payBook/{id}', 'BookController@payBook');
