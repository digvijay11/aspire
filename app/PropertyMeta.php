<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PropertyMeta extends Model
{
 	protected $table = 'property_meta';
 	protected $fillable = ['property_id', 'key', 'value'];


    public function metable()
    {
        //return $this->morphTo();
        return $this->belongsTo('Property');
    }
 
}
