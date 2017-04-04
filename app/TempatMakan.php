<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatMakan extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tempat_makan';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
