<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Submenu;
use App\Menu;

class SubmenuController extends Controller
{
   public function submenu(){
      $d = Submenu::all();
      return view('admin/submenu',['data' =>$d]);
    }
    public function submenuindex(){
      $d = Submenu::all();
      return view('admin/tambah_produk',['data' =>$d]);
    }
   
    public function create(Request $request){
   
        $tambah = new Submenu; //tambah data dengan eloquent
        $tambah->menu_id = $request->menu_id;
        $tambah->nama_submenu = $request->nama_submenu;
        $tambah->save();

            return redirect('/admin/submenu');

    }
    public function edit(Request $request,$id){
      $menu = Menu::all();
       // DB::table('menu')->select('menu.id','menu.nama_menu')
       // ->join('sub_menu','profiles.id','=','users.id')
       // ->where(['something' => 'something', 'otherThing' => 'otherThing'])
       // ->get();
     $d = Submenu::find($id);
     return view('admin/edit_submenu',['data'=>$d,'dmenu'=>$menu]);
    }
    
    public function update(Request $request, $id){
   
        $tambah = Submenu::find($id);
        // $tambah->menu_id = $request->menu_id;
        $tambah->nama_submenu = $request->nama_submenu;
        $tambah->save();

            return redirect('/admin/submenu');

    }
    public function hapus(Request $request, $id){
        Submenu::destroy($id);
            return redirect('/admin/submenu');

        
    }
}
