<?php

namespace App\Http\Controllers;

use Gate;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
    	//auth()->logout();
    	auth()->loginUsingId(2); //TEMPORARY!!
    	
    	$post = Post::findOrFail($id);

    	return view('posts.show', compact('post'));
    }
}
