<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
	protected $primaryKey = 'id';
    protected $table = 'konten';

    public function User()
    {
    	return $this->belongsTo('App\User','id_user');
    }

    public function Galeri()
    {
    	return $this->hasMany('App\Galeri','id_konten');
    }

}