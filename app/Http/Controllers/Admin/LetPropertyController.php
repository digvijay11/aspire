<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LetPropertyController extends Controller
{

    function getInfo($propertyId=null)
    {
        return view('admin.let.info',['active'=>'info']); 
    }
    function getMedia()
    {
        return view('admin.let.media',['active'=>'media']); 
    }
    function getLandlord()
    {
        return view('admin.let.landlord',['active'=>'landlord']); 
    }
    function getViewing()
    {
        return view('admin.let.viewing',['active'=>'viewing']); 
    }
    function getTenant()
    {
        return view('admin.let.tenant',['active'=>'tenant']); 
    }
    function getDeal()
    {
        return view('admin.let.deal',['active'=>'deal']); 
    }
    function postStore(Request $request)
    {
        $input = $request->all();
        //return view('admin.let.card',['active'=>'card']); 
    }
    
    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
}
