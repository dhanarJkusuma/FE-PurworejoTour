<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
   protected $table = 'penginapan';

   public function Desa(){
		return $this->belongsTo('App\Desa','id_desa');
   }

   public function Galeri(){
   		return $this->hasMany('App\GaleriPenginapan', 'id_penginapan');
   }
}
