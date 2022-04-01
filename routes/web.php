<?php

// use App\Http\Controllers\BookController;
use App\Models\Post;
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

Route::get('/', function (){
    return 'Welcome Page';
});

//afficher les livres, pour afficher les formulaire d'ajoute, l'ajout d'un livre (POST), formulaire d'edition, editer un livre (PUT/PATCH), supprimer un livre (DELETE)

// Route::resource('book', 'App\Http\Controllers\BookController')->except(['destroy','edit','update']);
// Route::resource('book', 'App\Http\Controllers\BookController')->only(['destroy','edit','update']);



Route::resource('posts', '\App\Http\Controllers\PostController');


Route::middleware(['admin'])->group(function(){
    Route::get('/foo', '\App\Http\Controllers\TestController@foo');
    Route::get('/bar', '\App\Http\Controllers\TestController@bar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
