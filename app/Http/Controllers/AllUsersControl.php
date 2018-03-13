<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class AllUsersControl extends Controller
{
    public function DoTheThings() {
    	
    	$users = User::all();
    	return view('allusers.list')->with('users', $users);
    }
}
