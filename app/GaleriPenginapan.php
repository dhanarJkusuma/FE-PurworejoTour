<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriPenginapan extends Model
{
    protected $table = 'gallery_penginapan';

    public function Penginapan(){
    	return $this->belongsTo('App\Penginapan','id_penginapan');
    }
}
