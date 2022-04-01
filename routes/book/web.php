<?php

use Illuminate\Support\Facades\Route;

Route::group(
    ['middleware' => ['auth'],
     'prefix' => 'gestion',
     'namespace' => 'Book',
     'as' => 'gestion.'
    ],
    function (){
    Route::resource('book', '\App\Http\Controllers\Book\BookController');

    Route::group(['middleware' => ['admin']], function (){
        Route::resource('admin','\App\Http\Controllers\AdminController');
    });
});