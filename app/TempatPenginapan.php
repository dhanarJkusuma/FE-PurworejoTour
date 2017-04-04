<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatPenginapan extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tempat_penginapan';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
