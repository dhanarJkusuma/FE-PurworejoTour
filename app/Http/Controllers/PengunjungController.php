<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TempatWisata;
use App\Galeri;
class PengunjungController extends Controller
{
    public function index()
    {
    	$wisata = TempatWisata::all();
    	return view('front.home')->with('wisata',$wisata);
    }

    public function detail($permalink)
    {
    	$wisata = Konten::where('permalink','=',$permalink)->first();
    	$galleries = Galeri::where('id_konten','=',$wisata->id_konten)->get();
    	return view('pengunjung.detail')->with('wisata',$wisata)->with('galleries',$galleries);
    }
}
