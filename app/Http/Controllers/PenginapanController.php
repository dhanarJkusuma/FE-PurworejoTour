<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Desa;
class PenginapanController extends Controller
{
    public function index(){

    }

    public function insertView(){
    	$desa = Desa::all();
    	return view('admin.penginapan.tambah_penginapan')->with('desa', $desa);
    }
}
