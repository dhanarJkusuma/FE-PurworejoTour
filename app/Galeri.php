<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id_photo';

    public function Konten()
    {
    	return $this->belongsTo('App\Konten','id_konten');
    }
}
