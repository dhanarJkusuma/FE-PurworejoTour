<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tokoh extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tokoh';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
