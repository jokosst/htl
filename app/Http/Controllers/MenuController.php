<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Menu;

class MenuController extends Controller
{
    public function menu(){
      $d = Menu::all();
      return view('admin/menu',['data' =>$d]);
    }
     public function tambahsubmenu(){
      $d = Menu::all();
      return view('admin/tambah_submenu',['data' =>$d]);
    }
    public function create(Request $request){
   
        $tambah = new Menu; //tambah data dengan eloquent
        $tambah->nama_menu = $request->nama_menu;
        $tambah->save();

            return redirect('/admin/menu');

    }
    public function edit(Request $request,$id){
     $d = Menu::find($id);
     return view('admin/edit_menu',['data' =>$d]);
    }
    public function update(Request $request, $id){
   
        $tambah = Menu::find($id);
        $tambah->nama_menu = $request->nama_menu;
        $tambah->save();

            return redirect('/admin/menu');

    }
     public function hapus(Request $request, $id){
        Menu::destroy($id);
            return redirect('/admin/menu');

        
    }
}