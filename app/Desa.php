<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';

   	public function Penginapan(){
   		return $this->hasMany('App\Penginapan','id_desa');;
   	}
}