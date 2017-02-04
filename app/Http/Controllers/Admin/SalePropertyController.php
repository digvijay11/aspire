<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SalePropertyController extends Controller
{


    function getInfo()
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
        $post=$request->input();
        switch ($post['redirect_to']) {
            case 'info':
                $this->saveInfo($post);
                return redirect()->back()->with('message', 'Information Saved Sucessfully !!');
                break;
            
            default:
                break;
        }
    }
    private function saveInfo($post)
    {
            $property=new Property;
            $property->address_1=$post['address_1'];
            $property->address_2=$post['address_2'];
            $property->city=$post['city'];
            $property->postal_code=$post['postcode'];
            $property->county=$post['county'];
            $property->save();
    }
    
    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
}
