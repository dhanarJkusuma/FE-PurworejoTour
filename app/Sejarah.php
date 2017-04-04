<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sejarah';
    
   	public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }
    
}
