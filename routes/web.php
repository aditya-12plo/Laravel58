<?php  

Route::get('/', 'HomeController@index');
Route::get('lang/{locale}', 'HomeController@lang');
