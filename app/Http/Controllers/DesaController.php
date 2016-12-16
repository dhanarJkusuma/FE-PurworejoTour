<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Desa;
use Illuminate\Support\Facades\Input;


class DesaController extends Controller
{
    public function index(){
        return view('admin.desa.lihat_desa');
    }

    public function getJson(){
    	$result = Desa::all();
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
                                    <li><a href=\"". route('ubahDesa', ['id' => $res['id']]) ."\">Ubah</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\" data-id=\"". $res['id'] . "\" data-toggle=\"modal\"  data-target=\"#hapusDialog\" class=\"hapusDialog\">Hapus</a></li>
                                  </ul>
                                </div>
            ";
            $nomer++;
        }

        $data = array(
            'data' => $result
            );
        return response()->json($data);
    }

    public function insertView(){
    	return view('admin.desa.tambah_desa');
    }

    public function insert(){
    	$desa = new Desa();
    	$desa->nama_desa = Input::get('desa');
    	$desa->save();
    	return redirect()->route('lihatDesa');
    }

    public function destroy(){
    	$id = Input::get('id');
    	$desa = Desa::find($id)->delete();
    	return redirect()->route('lihatDesa');
    }

    public function updateView($id){
    	$desa = Desa::find($id);
    	return view('admin.desa.ubah_desa')->with('desa', $desa);
    }

    public function update($id){
    	$desa = Desa::find($id);
    	$desa->nama_desa = Input::get('desa');
    	$desa->save();
    	return redirect()->route('lihatDesa');
    }
}
