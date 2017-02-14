<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\kontak;
use App\Submenu;
use App\Menu;

class KontakController extends Controller
{
	public function kontak(){
		 $d= kontak::find('1');
		  return view('admin/kontak',['data' =>$d]);
	}
	public function userkontak(){
		 $d= kontak::find('1');
		  $kategoris = Menu::all()->load('Submenu');
		  return view('kontak', compact('kategoris'), ['data' =>$d]);
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
