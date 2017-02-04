<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//use Freshwork\Metable\Traits\Metable;

class Customer extends Model
{
 	protected $table = 'customers';
 	//protected $metaTable = 'customer_meta'; 
    protected $fillable = ['name', 'email', 'password','mobile1','mobile2','address_1','address_2','address_3','notes','type','managed_by'];
    public $rules = array(
        'name'      => 'required|min:3|max:100',
        'email'     => 'required|min:6|max:100|unique:customers',
        'address_1' => 'required'
    );
    use SoftDeletes;

    public function meta()
    {   
        return $this->hasMany('App\CustomerMeta');
    }
    public function toArray()
    {
        $array = parent::toArray();
        foreach ($this->getMetaData() as $key => $value) {

                if (preg_match('/\b\d{4}-\d{2}-\d{2}\b/',$value)) // if value is date convert to d-m-y
                 $array['metadata'][$key]=date('d-m-Y',strtotime($value));
                else
                 $array['metadata'][$key]=$value;   

             }     
        return $array;
    }
    public function getMetaData()
    {
        return $this->meta->lists('value','key')->toArray();   
    }
    

 	public function SaveCustomer($input,$type)
 	{
 			$post['name']=$input['name'];
            $post['email']=$input['email'];
            if(!empty($input['password']))
            $post['password']=$input['password'];
            $post['mobile1']=$input['mobile1'];
            $post['mobile2']=$input['mobile2'];
            $post['address_1']=!empty($input['address_1'])?$input['address_1']:'';
            $post['address_2']=!empty($input['address_2'])?$input['address_2']:'';
            $post['address_3']=!empty($input['address_3'])?$input['address_3']:'';
            $post['notes']=!empty($input['notes'])?$input['notes']:'';
            $post['type']=$type;
            $post['managed_by']=!empty($input['managed_by'])?$input['managed_by']:'0';    		 
            $customer['id']=!empty($input['id'])?$input['id']:'';
            $cust=Customer::updateOrCreate($customer,$post); 
            $cid=$cust->id;
            extract($input);
            if($type=="LANDLORD"):
                $this->updateMeta($cid,'solicitor_company',$metadata['solicitor_company']);
                $this->updateMeta($cid,'solicitor_email',$metadata['solicitor_email']);
                $this->updateMeta($cid,'solicitor_mobile1',$metadata['solicitor_mobile1']);
                $this->updateMeta($cid,'contact_person',$metadata['contact_person']);
                $this->updateMeta($cid,'solicitor_address',$metadata['solicitor_address']);
                $this->updateMeta($cid,'property_type',$metadata['property_type']);
                $this->updateMeta($cid,'source_of_call',$metadata['source_of_call']);
                $this->updateMeta($cid,'total_bedrooms',$metadata['total_bedrooms']);
                $this->updateMeta($cid,'is_market_house',$metadata['is_market_house']);
                $this->updateMeta($cid,'how_soon_market',$metadata['how_soon_market']);
                $this->updateMeta($cid,'valuation_date',$this->fixDate($metadata['valuation_date']));
                $this->updateMeta($cid,'follow_up1',$this->fixDate($metadata['follow_up1']));
                $this->updateMeta($cid,'follow_up2',$this->fixDate($metadata['follow_up2']));
                $this->updateMeta($cid,'follow_up3',$this->fixDate($metadata['follow_up3']));
            endif;

 	}
    private function fixDate($date)
    {
        return date('Y-m-d',strtotime($date));
    }

    private function updateMeta($id,$key,$value)
    {   
        if(!empty($key) && !empty($value))
        CustomerMeta::updateOrCreate(['customer_id'=>$id,'key'=>$key],['value'=>$value]);
    }

}
