<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Kontributor;
use App\admin;
use App\Submenu;

class KontriController extends Controller
{
    public function akseskontributor(){
    $d = DB::table('tbl_relasi')
            ->join('admin','admin.id','=','tbl_relasi.admin_id')
            ->select('tbl_relasi.admin_id','admin.username')
            ->groupby('tbl_relasi.admin_id','admin.username')
            ->get(); 
      return view('admin/akses_kontributor',['data' =>$d]);
  }
  public function createakseskontri(Request $request){
     
        $tambah = new Kontributor; //tambah data dengan eloquent
        $tambah->admin_id = $request->admin_id;
        $tambah->id_kategori = $request->id_kategori;
        $tambah->save();

            return redirect('admin/akseskontributor');

    }
    public function view(Request $request,$id)
    {
    	$k = Submenu::all();
     $data = Kontributor::where('admin_id',$id)
            ->join('sub_menu', 'sub_menu.id', '=', 'tbl_relasi.id_kategori')
            ->select('tbl_relasi.id','sub_menu.nama_submenu')
            ->get();
    $datav = Kontributor::where('admin_id',$id)
            ->join('admin', 'admin.id', '=', 'tbl_relasi.admin_id')
            ->select('admin.id','admin.username')
            ->groupby('admin.id','admin.username')
            ->first();

   return view('admin/lihat_kontributor',['datas'=>$data,'datav'=>$datav,'dk' =>$k]);
    }
    public function createakseskontri2(Request $request,$id)
    {
      $kontri = admin::find($id);
      $id_kontri = $kontri->id;
   
        $tambah = new Kontributor; //tambah data dengan eloquent
        $tambah->admin_id = $id_kontri;
        $tambah->id_kategori = $request->id_kategori;
        $tambah->save();

            return back();

    }
    public function hapusakseskontri(Request $request, $id)
    {
      Kontributor::destroy($id);
      return redirect('/admin/akseskontributor');
      
    }
}
