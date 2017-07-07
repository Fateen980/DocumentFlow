<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserHome extends Controller
{
    
	public function index(){

		return view('users.usersHome', ['name' => 'Fateen']);

	}


}
