<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kesenian extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'kesenian';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}