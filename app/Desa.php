<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'desa';

   	public function Penginapan(){
   		return $this->hasMany('App\Penginapan','id_desa');
   	}

   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
