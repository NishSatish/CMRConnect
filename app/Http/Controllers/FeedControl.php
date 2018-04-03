<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class FeedControl extends Controller
{
    public function ShowFeed()
    {
    	if (Auth::user()) {
    		$posts = Post::orderBy('created_at', 'desc')->get();
    		return view('feed', compact('posts'));
    	} else {
    		return view('index');
    	}
    	
    }
}
