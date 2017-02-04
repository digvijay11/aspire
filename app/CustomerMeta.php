<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CustomerMeta extends Model
{
 	protected $table = 'customer_meta';
 	protected $fillable = ['customer_id', 'key', 'value'];
    public function Customer()
    {
        return $this->belongsTo('Customer');
    }
 
}
