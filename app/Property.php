<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends Model
{
    //
	protected $table="properties";
	protected $fillable = [
        'door_no','address_1','road','address_2','county','postal_code','county','city','latitude','longitude','country','type'
    ];
     public function meta()
    {
        //return $this->morphMany('App\PropertyMeta', 'metable');
        return $this->hasMany('App\PropertyMeta','property_id');
    }
    public function MetaData(){
    	return PropertyMeta::all();
    }
    public function getMetaData()
    {
        return $this->meta->lists('value','key')->toArray();   
    }

	public function SaveProperty($post){
        $id=( isset($post['id']) && $post['id']>0 )?$post['id']:'';
		$data['address_1']=$post['address_1'];
		$data['door_no']=$post['door_no'];
		$data['road']=$post['road'];
		$data['address_2']=$post['address_2'];
		$data['city']=$post['city'];
		$data['postal_code']=$post['postal_code'];
		$data['county']=$post['county'];
		$data['latitude']=$post['latitude'];
		$data['longitude']=$post['longitude'];
		$data['type']='let';
		$obj=Property::updateOrCreate(['id'=>$id],$data);
    	$this->updateMeta($obj->id,'asking_rent',$post['metadata']['asking_rent']);
        $this->updateMeta($obj->id,'description',$post['metadata']['description']);
        $this->updateMeta($obj->id,'summary',$post['metadata']['summary']);
        $this->updateMeta($obj->id,'bedrooms',$post['metadata']['bedrooms']);
        $this->updateMeta($obj->id,'property_types',$post['metadata']['property_types']);
        $this->updateMeta($obj->id,'how_detached',$post['metadata']['how_detached']);
        $this->updateMeta($obj->id,'bathrooms',$post['metadata']['bathrooms']);
        $this->updateMeta($obj->id,'showers',$post['metadata']['showers']);
        $this->updateMeta($obj->id,'receptions',$post['metadata']['receptions']);
        $this->updateMeta($obj->id,'furnished',$post['metadata']['furnished']);
        $this->updateMeta($obj->id,'description',$post['metadata']['description']);
        $this->updateMeta($obj->id,'double_glazed',$post['metadata']['double_glazed']);

        $this->updateMeta($obj->id,'central_heating',$post['metadata']['central_heating']);
        $this->updateMeta($obj->id,'communal_heating',$post['metadata']['communal_heating']);
        $this->updateMeta($obj->id,'high_ceilings',$post['metadata']['high_ceilings']);
        $this->updateMeta($obj->id,'tv',$post['metadata']['tv']);
        $this->updateMeta($obj->id,'washing_machine',$post['metadata']['washing_machine']);
        $this->updateMeta($obj->id,'wooden_floors',$post['metadata']['wooden_floors']);
        $this->updateMeta($obj->id,'cable',$post['metadata']['cable']);
        $this->updateMeta($obj->id,'satelite',$post['metadata']['satelite']);
        $this->updateMeta($obj->id,'video_player',$post['metadata']['video_player']);
        $this->updateMeta($obj->id,'lift',$post['metadata']['lift']);
        $this->updateMeta($obj->id,'garden',$post['metadata']['garden']);
        $this->updateMeta($obj->id,'roof_garden',$post['metadata']['roof_garden']);

        $this->updateMeta($obj->id,'dishwasher',$post['metadata']['dishwasher']);
        $this->updateMeta($obj->id,'fridge/freezer',$post['metadata']['fridge/freezer']);
        $this->updateMeta($obj->id,'off-street_parking',$post['metadata']['off-street_parking']);
        $this->updateMeta($obj->id,'parking',$post['metadata']['parking']);
        $this->updateMeta($obj->id,'swimming_pool',$post['metadata']['swimming_pool']);
        $this->updateMeta($obj->id,'shower',$post['metadata']['shower']);
        $this->updateMeta($obj->id,'pets_allowed',$post['metadata']['pets_allowed']);
        $this->updateMeta($obj->id,'features',json_encode($post['metadata']['features']));
     

	}
  private function updateMeta($id,$key,$value)
    {   
        if(!empty($key) && !empty($value))
        PropertyMeta::updateOrCreate(['property_id'=>$id,'key'=>$key],['value'=>$value]);
    }

}
