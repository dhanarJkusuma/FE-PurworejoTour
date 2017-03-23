<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User; 

//Import helper input. contoh penggunaan Input::get('')
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
	//Fungsi yang pertama dijalankan ketika Controller dibuka
    public function __construct()
    {
    	//Meletakkan Firewall auth/ meletakkan dinding yang hanya dapat diakses oleh user yang login
    	$this->middleware('auth');
    }

    public function dashboard()
    {
        $user = Auth::User();

    	//Mengembalikan tampilan yang di directory Resource/admin/layout.blade.php
    	return view('admin.dashboard')->with('users',$user);
    }
    public function tampil_objek_wisata(){
        return view('admin.objek_wisata');
    }
    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
