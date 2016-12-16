<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Konten;
use App\Konten1;
use Illuminate\Support\Facades\Input;
use Image;
use Auth;
use App\Galeri;
class KontenController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function tampilan_tambah()
    {
        $user = Auth::User();
    	return view('admin.konten.tambah_konten')->with('users',$user);
    }

    public function proses_tambah(Request $request)
    {
    	$konten = new Konten;
    	$konten->judul_konten = Input::get('judul');
    	$konten->isi_konten = Input::get('isi');
    	$konten->id_user = Auth::user()->id;
    	if($request->hasFile('thumbnail'))
    	{
    		$destination_path = base_path() . "/public/konten/thumbnail";
    		$filename = Input::get('permalink') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
    		$request->file('thumbnail')->move($destination_path,$filename);
    		$konten->thumbnail = $filename;
    		Image::make(url('konten/thumbnail'). "/" . $filename)->fit(200,200)->save($destination_path."/".$filename);
    	}
        $konten->alamat = Input::get('alamat');
    	$konten->permalink = Input::get('permalink');
    	$konten->latitude = Input::get('latitude');
    	$konten->longitude = Input::get('longitude');
    	$konten->save();

    	return redirect()->route('TampilanTambahGaleri',['id' => $konten->id ])->with('berhasil','Berhasil menambahkan data konten.');
    }

    public function detil_konten($id)
    {
        $user = Auth::User();
        $konten = Konten::where('id','=',$id)->first();
        return view('admin.konten.detail_konten')->with('wisata',$konten)->with('users',$user);
    }

    public function lihat_konten()
    {
        $user = Auth::User();
        return view('admin.konten.lihat_konten')->with('users',$user);
    }

    public function ambil_json()
    {
        $columns = array(
                'id',
                'judul_konten',
                'thumbnail',
                'created_at',
            );

        $result = Konten::get($columns);
        $nomer = 1;
        foreach ($result as $res) {
            $res['nomer'] = $nomer;
            $res['action'] = "
                                <div class=\"btn-group\">
                                  <button type=\"button\" class=\"btn btn-default\">Opsi</button>
                                  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"caret\"></span>
                                    <span class=\"sr-only\">Toggle Dropdown</span>
                                  </button>
                                  <ul class=\"dropdown-menu\">
                                    <li><a href=\"" . url('wisata/detil/') . "/" . $res['id'] . "\">Lihat</a></li>
                                    <li><a href=\"" . url('wisata/galeri/') . "/" . $res['id'] . "/lihat" . "\">Kelola Galeri </a></li>
                                    <li><a href=\"". url('wisata/ubah/') ."/". $res['id'] ."\">Ubah</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\" data-id=\"". $res['id'] . "\" data-toggle=\"modal\"  data-target=\"#hapusDialog\" class=\"hapusDialog\">Hapus</a></li>
                                  </ul>
                                </div>
            ";
            $res['gambar'] = "<img src='". url('konten/thumbnail') . "/" . $res['thumbnail'] ."' width='100' height='100'>";
            $nomer++;
        }

        $data = array(
            'data' => $result
            );
        return response()->json($data);
    }

    public function tampilan_ubah($id)
    {
        $user = Auth::User();
        $wisata = Konten::where('id','=',$id)->first();

        return view('admin.konten.ubah_konten')->with('wisata',$wisata)->with('users',$user);
    }

    public function proses_ubah($id,Request $request)
    {
        $wisata = Konten::where('id','=',$id)->first();
        $wisata->judul_konten = Input::get('judul');
        $wisata->isi_konten = Input::get('isi');
        $wisata->id_user = Auth::user()->id;
        if($request->hasFile('thumbnail'))
        {
            $destination_path = base_path() . "/public/konten/thumbnail";
            $filename = Input::get('permalink') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move($destination_path,$filename);
            $wisata->thumbnail = $filename;
            Image::make(url('konten/thumbnail'). "/" . $filename)->fit(200,200)->save($destination_path."/".$filename);
        }
        $wisata->alamat = Input::get('alamat');
        $wisata->permalink = Input::get('permalink');
        $wisata->latitude = Input::get('latitude');
        $wisata->longitude = Input::get('longitude');
        $wisata->save();

        return redirect()->route('LihatKonten')->with('berhasil','Berhasil mengubah data konten.');
    }


    public function hapus()
    {
        $id_konten = Input::get('id');
        $gallery_path = base_path() . "/public/konten/gallery";
        $thumbnail_path = base_path() ."/public/konten/thumbnail";
        //Ambil data gallery yang id konten = $id_kontens
        $galleries = Galeri::where('id','=',$id_konten)->get();
        
        foreach ($galleries as $gallery) 
        {            
            //Hapus gambarnya
            unlink($gallery_path . "/" . $gallery['nama_photo']);    
        }   
        

        //Hapus Gambar Thumnailnya
        $wisata = Konten::where('id','=',$id_konten)->first();
        unlink($thumbnail_path . "/" . $wisata->thumbnail);

        //Hapus Kontennya
        $wisata = Konten::where('id','=',$id_konten)->delete();

        return redirect()->route('LihatKonten')->with('berhasil','Berhasil menghapus data konten.');

    }

    public function test()
    {
        $wisata = Konten1::all();

        return response()->json($wisata);
    }
    

}

