<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Property;
use App\PropertyMeta;

class LetPropertyController extends Controller
{

    function getInfo($id=null)
    {
     $property=false;   
     if($id!=null):
        $propertyinfo=Property::find($id);
        $propertyinfo->getMetaData();
        $property=$propertyinfo->toArray();
        foreach ( $property['meta'] as $key => $v ) {
                  $property['metadata'][$v['key']]=$v['value'];
        }
        $property['metadata']['features']=json_decode($property['metadata']['features']);
     endif;

        return view('admin.let.info',['active'=>'info','property'=>$property]); 
    }
    function getList(){
        $properties=Property::where('type', '=','let')->paginate(15);
       // print_r($properties);
        return view('admin.let.list',['properties'=>$properties]);
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
        $property=new Property();
        $Pid=$property->SaveProperty($input);
        return redirect()->action('Admin\LetPropertyController@getList')->with('success','Property Added successfully');
        //return view('admin.let.card',['active'=>'card']); 
    }
    
    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
        function postDelete($id)
    {
        if($id!=null)
         {
            $Property = Property::find($id);
            $Property->delete();
            return redirect()->action('Admin\LetPropertyController@getList')->with('success','Property Deleted successfully');   
         }
         else
            return redirect()->action('Admin\LetPropertyController@getList')->with('error','Property not Found');   

        
    } 
}
