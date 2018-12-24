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
    return view('welcome');
});

// Route::get('/','Project4controller@insertform')->name('home');
// Route::post('/insert','Project4controller@insert')->name('insert');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'HomeController@postform')->name('post');
Route::post('/postinsert', 'HomeController@postinsert')->name('postinsert');
Route::get('/tableview', 'HomeController@tableview')->name('tableview');
Route::get('/editview', 'HomeController@editview')->name('edit');
Route::post('/editok', 'HomeController@editok')->name('editok');
Route::get('/detailview', 'HomeController@detailview')->name('detailview');
Route::get('/delete','HomeController@delete')->name('delete');
