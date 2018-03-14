<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/p/{id}', 'Article@show')->name('article');

Route::get('/d/{id}', 'Article@destroy')->name('article');

Route::get('/admin', 'Admin@index')->name('admin');

Route::get('/u/{id}', 'User@index');

Route::get('/tag/{id}', 'Tag@index');

Route::post('/article/add', 'Article@store')->middleware('auth');

Route::post('/article/update', 'Article@update')->middleware('auth');

Route::get('/article/create', 'Article@create')->middleware('auth');

Route::get('/mail/send', 'MailController@send');

