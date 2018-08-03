<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/data','DataController');

Route::get('/', 'ClientController@index');
Route::post('/signup','Auth\RegisterController@create')->name('register1');
Route::resource('/aboutsection','AboutSectionController');
Route::resource('/videosection','VideoSectionController');

//---------ajax call ---------------------------
Route::post('ajax/login','Auth\LoginController@login')->name('auth.login');
