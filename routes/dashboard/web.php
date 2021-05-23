<?php


use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route as Route;


Route::prefix('dashboard')->name('dashboard.')->group( function(){

    Route::get('/index','DashboardController@index')->name('index');

    // users routes

    Route::get('/users','UserController@index')->name('users.index');


});




















?>
