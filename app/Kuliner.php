<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'kuliner';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
