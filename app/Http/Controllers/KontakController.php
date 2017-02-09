<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\kontak;

class KontakController extends Controller
{
	public function kontak(){
		 $d= kontak::find('1');
		  return view('admin/kontak',['data' =>$d]);
	}
	public function userkontak(){
		 $d= kontak::find('1');
		  $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get(); return view('kontak',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
	}
	public function editkontak(Request $request){
     $tambah = kontak::find(1);
        $tambah->email = $request->email;
        $tambah->telpon = $request->telpon;
        $tambah->hp = $request->hp;        

        $tambah->save();

            return redirect('/admin/kontak')->with('success', 'Data Berhasil di Ubah');
    }
   
}
