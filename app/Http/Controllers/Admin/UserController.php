<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
    	echo "hello";
        return view('admin.dashboard'); 
    }

    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
}
