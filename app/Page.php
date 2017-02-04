<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Page extends Authenticatable
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'content',
    ];
        
      public function author()
      {
         return $this->belongsTo('App\User','author_id');
      }

    
}

