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
    	auth()->loginUsingId(1); //TEMPORARY!!
    	
    	$post = Post::findOrFail($id);

    	// if (auth()->user()->can('update-post', $post)){
    	// 	return 'You can update this';
    	// }

    	return view('posts.show', compact('post'));
    }
}
