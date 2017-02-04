<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Customer;

class CustomersController extends Controller
{

    function getList($type="seller")
    {
        $customers=Customer::where('type', '=',strtoupper($type))->paginate(15);
        return view('admin.customers.list',['customers'=>$customers,'type'=>$type]); 
    }
    
    function getSeller($tab='profile',$id=null)
    {
        $customer=false;
        if($id!=null)
        $customer=Customer::find($id)->toArray();
        $staff_list=\App\User::lists('name', 'id');
        $page['active']='info';
        $page['staff_list']=$staff_list;
        return view('admin.customers.seller-'.$tab, compact('page','customer')); 
    }
    
    function getLandlord($tab='profile',$id=null)
    {
       $customer=false;
       if($id!=null)
        $customer=Customer::find($id)->toArray();
        $staff_list=\App\User::lists('name', 'id');
        $page['active']='info';
        $page['staff_list']=$staff_list;
        return view('admin.customers.landlord-'.$tab, compact('page','customer')); 
    }
    
    function getBuyer($tab='profile',$id=null)
    {
        $staff_list=\App\User::lists('name', 'id');
        return view('admin.customers.buyer-'.$tab,['active'=>'info','staff_list'=>$staff_list]); 
    }
    
    function getTenant($tab='profile',$id=null)
    {
        $staff_list=\App\User::lists('name', 'id');
        return view('admin.customers.tenant-'.$tab,['active'=>'info','staff_list'=>$staff_list]); 
    }

    function postUpdate(Request $request)
    {
        $input = $request->all();
        $customer=new Customer();
        if($input['type']=="LANDLORD"):
            $customerId=$customer->SaveCustomer($input,$input['type']);
        endif;
        return redirect()->back()->with('success','Customer updated successfully');
    }
    function postSave(Request $request)
    {
         $input = $request->all();
         $customer=new Customer();
         $validator = Validator::make($request->all(),$customer->rules);
          if ($validator->fails()) 
                return redirect()->back()->withErrors($validator)->withInput(); 
          else
            {
               $customerId=$customer->SaveCustomer($input,$input['type']); 
               $userType=strtolower($input['type']);
               return redirect()->action('Admin\CustomersController@getList',$userType)->with('success','Customer Added successfully');
            }  
    }
    function postDelete($id)
    {
        if($id!=null)
         {
            $user = Customer::find($id);
            $type=strtolower($user->type);
            $user->delete();
            return redirect()->action('Admin\CustomersController@getList',$type)->with('success','Customer Deleted successfully');   
         }
         else
            return redirect()->action('Admin\CustomersController@getList',$type)->with('error','Customer not Found');   

        
    } 



   
    
    
}
