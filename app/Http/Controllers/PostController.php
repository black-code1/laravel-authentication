<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Events\PostCreatedEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      
    $posts = Post::all();
    
    return view('posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        $post = Post::create([
            'title' => 'Mon super titre',
            'content' => 'Mon super contenu',
            'author' => 'coderInProgress'
        ]);
         
        event(new PostCreatedEvent($post));
        dd('POST CREER');
    }
}
