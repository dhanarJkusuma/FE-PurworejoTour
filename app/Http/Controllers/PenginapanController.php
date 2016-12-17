<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Desa;
use App\GaleriPenginapan;
use App\Penginapan;
use Illuminate\Support\Facades\Input;
use Image;


class PenginapanController extends Controller
{
    public function index(){
    	$desa = Desa::all();
    	return view('admin.penginapan.lihat_penginapan')->with('desa',$desa);
    }

    public function insertView(){
    	$desa = Desa::all();
    	return view('admin.penginapan.tambah_penginapan')->with('desa', $desa);
    }

    public function insert(Request $request){
    	$penginapan = new Penginapan();
    	$penginapan->nama_penginapan = Input::get('nama');
    	$penginapan->alamat = Input::get('alamat');
    	$penginapan->permalink = Input::get('permalink');
    	$penginapan->kapasitas = Input::get('kapasitas');
    	if($request->hasFile('thumbnail'))
    	{
    		$destination_path = base_path() . "/public/penginapan/thumbnail";
    		$filename = Input::get('permalink') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
    		$request->file('thumbnail')->move($destination_path,$filename);
    		$penginapan->url_gambar = $filename;
    		Image::make(url('penginapan/thumbnail'). "/" . $filename)->fit(200,200)->save($destination_path."/".$filename);
    	}
    	$penginapan->id_desa = Input::get('desa');
    	$penginapan->kontak = Input::get('kontak');
    	$penginapan->latitude = Input::get('latitude');
    	$penginapan->longitude = Input::get('longitude');
    	$penginapan->save();
    	return redirect()->route('tambahPenginapanGallery',['id' => $penginapan['id']]);
    }

    public function updateView($id){
    	$penginapan = Penginapan::find($id);
    	$desa = Desa::all();
    	return view('admin.penginapan.ubah_penginapan')->with('desa',$desa)->with('penginapan',$penginapan);
    }

    public function update(Request $request, $id){
    	$penginapan = Penginapan::find($id);
    	$penginapan->nama_penginapan = Input::get('nama');
    	$penginapan->alamat = Input::get('alamat');
    	$penginapan->permalink = Input::get('permalink');
    	$penginapan->kapasitas = Input::get('kapasitas');
    	if($request->hasFile('thumbnail'))
    	{
    		$destination_path = base_path() . "/public/penginapan/thumbnail";
    		$filename = Input::get('permalink') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
    		$request->file('thumbnail')->move($destination_path,$filename);
    		$penginapan->url_gambar = $filename;
    		Image::make(url('penginapan/thumbnail'). "/" . $filename)->fit(200,200)->save($destination_path."/".$filename);
    	}
    	$penginapan->id_desa = Input::get('desa');
    	$penginapan->kontak = Input::get('kontak');
    	$penginapan->latitude = Input::get('latitude');
    	$penginapan->longitude = Input::get('longitude');
    	$penginapan->save();
    	return redirect()->route('lihatPenginapan');
    }

    public function getDetail($id){
    	$penginapan = Penginapan::find($id);
    	return view('admin.penginapan.detil_penginapan')->with('penginapan', $penginapan);
    }

    public function getJson(){

        $columns = array(
                'id',
                'nama_penginapan',
                'permalink',
                'url_gambar',
                'created_at',
            );
        $nomer = 1;
        $result = Penginapan::get($columns);
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
                                    <li><a href=\"" . route('detailPenginapan', ['id' => $res['id']]) . "\">Lihat</a></li>
                                    <li><a href=\"" . route('ambilGaleriPenginapan', ['id' => $res['id']]) . "\">Kelola Galeri </a></li>
                                    <li><a href=\"". route('ubahPenginapan', ['id' => $res['id'] ]) ."\">Ubah</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\" data-id=\"". $res['id'] . "\" data-toggle=\"modal\"  data-target=\"#hapusDialog\" class=\"hapusDialog\">Hapus</a></li>
                                  </ul>
                                </div>
            ";
            $res['gambar'] = "<img src='". url('penginapan/thumbnail') . "/" . $res['url_gambar'] ."' width='100' height='100'>";
            $nomer++;
        }
       $data = array(
        'data' => $result
        );
        return response()->json($data);
    }

    public function destroy(){

    	$id = Input::get('id');
        //$gallery_path = base_path() . "/public/penginapan/gallery";
        $thumbnail_path = base_path() ."/public/penginapan/thumbnail";
        //Ambil data gallery yang id konten = $id_kontens
        // $galleries = Galeri::where('id','=',$id_konten)->get();
        
        // foreach ($galleries as $gallery) 
        // {            
        //     //Hapus gambarnya
        //     unlink($gallery_path . "/" . $gallery['nama_photo']);    
        // }   
        

        //Hapus Gambar Thumnailnya
        $data = Penginapan::find($id);
        unlink($thumbnail_path . "/" . $data->url_gambar);

        //Hapus Kontennya
        $data->delete();

        return redirect()->route('lihatPenginapan')->with('berhasil','Berhasil menghapus data penginapan.');
    	

    }


    public function insertGalleryView($id)
    {
        $columns = array('id','nama_penginapan');
        $penginapan = Penginapan::find($id);
        return view('admin.penginapan.gallery.tambah_gallery')->with('penginapan',$penginapan);
    }

    public function updateGalleryView($id)
    {
        $user = Auth::User();
        $columns = array('id','judul_konten');
        $wisata = Penginapan::find($id);
        // echo $wisata->id;
        return view('admin.galeri.tambah_galeri')->with('wisata',$wisata)->with('users',$user);
    }

    public function insertGallery($id, Request $request)
    {
        $galleries = $request->file('galleries');
        $num = 1;
        foreach ($galleries as $gallery) 
        {	
        	if($gallery != null){
        		$galeri = new GaleriPenginapan;
	        	$destination_path = base_path() . "/public/penginapan/gallery";
	            $filename = 'galeri' . date('YmdHis') . $num  . '.' . $gallery->getClientOriginalExtension();
	            $gallery->move($destination_path,$filename);
	            Image::make(url('penginapan/gallery'). "/" . $filename)->fit(400,300)->save($destination_path."/".$filename);	
	            $galeri->nama_photo = $filename;
	            $galeri->id_penginapan = $id;
	            $galeri->save();
	            $num++;	
        	}
        	
        }        
        return redirect()->route('ambilGaleriPenginapan',['id' => $id])->with('berhasil','Galeri foto berhasil ditambahkan.');
    }

    public function getGallery($id)
    {
        // echo $id;
    	$penginapan = Penginapan::find($id);

        
        // return response()->json($id);
    	return view('admin.penginapan.gallery.lihat_gallery')->with('penginapan', $penginapan);
    }

    public function destroyGallery($id)
    {
    	$gallery_path = base_path() . "/public/penginapan/gallery";
        $id_gallery = Input::get('id');
        $id_penginapan = $id;

    	$galeri = GaleriPenginapan::find($id_gallery);
    	
    	unlink($gallery_path . "/" . $galeri->nama_photo);
        $galeri->delete();

    	return redirect()->route('ambilGaleriPenginapan',['id' => $id])->with('berhasil','Berhasil menghapus foto');
    }
}
