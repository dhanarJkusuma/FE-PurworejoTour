<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tempat_wisata';

    public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }

}
