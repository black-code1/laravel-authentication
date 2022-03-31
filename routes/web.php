<?php

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

Route::get('/', function () {

    $post = Post::find(1);
    // $post->delete();
    $post->forceDelete();

    // Post::where('id',1)->get();

    // dd($post);
    $posts = Post::all();

    // $posts = Post::withTrashed()->where('id',1)->get();
    // $posts = Post::withTrashed()->where('id',1)->restore();

    // dd($posts);
    // dd(Post::where('id',1)->get());
    
    return view('welcome', compact('posts'));
});


Route::middleware(['admin'])->group(function(){
    Route::get('/foo', '\App\Http\Controllers\TestController@foo');
    Route::get('/bar', '\App\Http\Controllers\TestController@bar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
