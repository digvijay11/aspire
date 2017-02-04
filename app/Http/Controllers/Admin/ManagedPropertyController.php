<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManagedPropertyController extends Controller
{

    function getInfo($propertyId=null)
    {
        return view('admin.sale.info',['active'=>'info']); 
    }
    function getMedia()
    {
        return view('admin.sale.media',['active'=>'media']); 
    }
    function getCard()
    {
        return view('admin.sale.card',['active'=>'card']); 
    }
    function postStore(Request $request)
    {
        $input = $request->all();
        //return view('admin.sale.card',['active'=>'card']); 
    }
    
    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
}
