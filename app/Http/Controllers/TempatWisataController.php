<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\TempatWisata; 
use Image;
use Illuminate\Support\Facades\Input;

class TempatWisataController extends Controller
{
   	public function tampil_objek_wisata(){
        return view('admin.objek_wisata');
    }

    public function tampilanTambah()
    {
        $user = Auth::User();
    	return view('admin.tempat_wisata.tambahWisata')->with('users',$user);
    }

    public function prosesTambah(Request $request)
    {
    	$judul = Input::get('judul');
    	$slug = str_slug(request('judul'));
    	$TempatWisata = new TempatWisata;
    	$TempatWisata->nama_tempat = $judul;
    	$TempatWisata->isi_konten = Input::get('isi');
    	$TempatWisata->id_user = Auth::user()->id;

    	if($request->hasFile('foto'))
    	{
    		$destination_path = base_path() . "/public/wisata/thumbnail";
    		$filename = $slug . '.' . $request->file('foto')->getClientOriginalExtension();
    		$request->file('foto')->move($destination_path,$filename);
    		$TempatWisata->foto1 = $filename;
    		Image::make(url('wisata/thumbnail'). "/" . $filename)->fit(200,200)->save($destination_path."/".$filename);
    	}

        $TempatWisata->alamat = Input::get('alamat');
    	$TempatWisata->slug = $slug;
    	$TempatWisata->latitude = Input::get('latitude');
    	$TempatWisata->longitude = Input::get('longitude');
    	$TempatWisata->save();

    	return redirect()->route('TampilanTambahGaleri',['id' => $TempatWisata->id ])->with('berhasil','Berhasil menambahkan data konten.');
    }

    public function lihatTempatWisata()
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

}
