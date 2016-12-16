<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Konten;
use App\Galeri;
use Auth;
use Illuminate\Support\Facades\Input;
use Image;
class GaleriController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function tampilan_tambah($id)
    {
        $user = Auth::User();
        $columns = array('id','judul_konten');
        $wisata = Konten::where('id','=',$id)->first();
        // echo $wisata->id;
        return view('admin.galeri.tambah_galeri')->with('wisata',$wisata)->with('users',$user);
    }

    public function tampilan_ubah($id)
    {
        $user = Auth::User();
        $columns = array('id','judul_konten');
        $wisata = Konten::where('id','=',$id)->first();
        // echo $wisata->id;
        return view('admin.galeri.tambah_galeri')->with('wisata',$wisata)->with('users',$user);
    }

    public function tambah_galeri($id, Request $request)
    {
        $galleries = $request->file('galleries');
        $num = 1;
        foreach ($galleries as $gallery) 
        {	
        	$galeri = new Galeri;
        	$destination_path = base_path() . "/public/konten/gallery";
            $filename = 'galeri' . date('YmdHis') . $num  . '.' . $gallery->getClientOriginalExtension();
            $gallery->move($destination_path,$filename);
            Image::make(url('konten/gallery'). "/" . $filename)->fit(400,300)->save($destination_path."/".$filename);	
            $galeri->nama_photo = $filename;
            $galeri->id_konten = $id;
            $galeri->save();
            $num++;
        }        
        return redirect()->route('LihatGaleri',['id' => $id])->with('berhasil','Galeri foto berhasil ditambahkan.');
    }

    public function ambil_galeri($id)
    {
        // echo $id;
        $user = Auth::User();
    	$galleries = Galeri::where('id_konten','=',$id)->get();
    	$index = 1;
    	$konten = Konten::where('id','=',$id);
        foreach ($galleries as $gallery) 
        {
    		$gallery['nomor'] = $index;
    		$index++;
    	}
        // return response()->json($id);
    	return view('admin.galeri.lihat_galeri')->with('galleries',$galleries)->with('id_konten',$id)->with('users',$user);
    }

    public function hapus_galeri()
    {
    	$gallery_path = base_path() . "/public/konten/gallery";
        $id = Input::get('id');

        $id_konten = Input::get('id_konten');
    	$galeri = Galeri::where('id','=',$id)->first();
    	unlink($gallery_path . "/" . $galeri->nama_photo);
        $galeri = Galeri::where('id','=',$id)->delete();

    	return redirect()->route('LihatGaleri',['id' => $id_konten])->with('berhasil','Berhasil menghapus foto');
    }
}
