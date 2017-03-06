<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\verifikator;
use App\admin;
use App\Submenu;

class VeriController extends Controller
{
    public function createaksesverifi(Request $request,$id){
      $veri = admin::find($id);
      $id_veri = $veri->id;
   
        $tambah = new verifikator; //tambah data dengan eloquent
        $tambah->admin_id_veri = $id_veri;
        $tambah->id_kategori = $request->id_kategori;
        $tambah->save();

            return back();

    }
    public function view(Request $request,$id){
    	// $data = DB::table('tbl_verifi')
     //        ->where('admin_id_veri','=',$id)
     //        ->join('admin', 'admin.id', '=', 'tbl_verifi.admin_id_kontri')
     //        ->select('tbl_verifi.id','admin.username')
     //        ->get();

        // $d = verifikator::where('admin_id_veri',$id)->get();
// $data = admin::where('username',$d->id)->get();
//return view('admin/lihat_verifikator',compact('datas'));
        $k = Submenu::all();
     $data = verifikator::where('admin_id_veri',$id)
            ->join('sub_menu', 'sub_menu.id', '=', 'tbl_verifi.id_kategori')
            ->select('tbl_verifi.id','sub_menu.nama_submenu')
            ->get();
    $datav = verifikator::where('admin_id_veri',$id)
            ->join('admin', 'admin.id', '=', 'tbl_verifi.admin_id_veri')
            ->select('admin.id','admin.username')
            ->groupby('admin.id','admin.username')
            ->first();

   return view('admin/lihat_verifikator',['datas'=>$data,'datav'=>$datav,'dk' =>$k]);
    }
    public function edit(Request $request,$id){
         $verifikator = 'verifikator';
          $kontributor = 'kontributor';
      $v = admin::where('sebagai', $verifikator)->get();
      $k = admin::where('sebagai', $kontributor)->get();
      
     //$data = verifikator::find($id)->with('admin');
      $datav = verifikator::join('admin', 'admin.id', '=', 'tbl_verifi.admin_id_veri')
            ->select('admin.username','admin.id')
            ->where('tbl_verifi.id', '=', $id)
            ->get();
   $datak = verifikator::join('admin', 'admin.id', '=', 'tbl_verifi.admin_id_kontri')
            ->select('admin.username','admin.id')
            ->where('tbl_verifi.id', '=', $id)
            ->get();
     
      return view('admin/edit_aksesverifi',['datav'=>$datav,'datak'=>$datak,'dv' =>$v,'dk' =>$k]);
    }
    public function update(Request $request, $id){
   
        $tambah = verifikator::find($id);
        $tambah->admin_id_veri = $request->admin_id_veri;
        $tambah->admin_id_kontri = $request->admin_id_kontri;
        $tambah->save();

            return redirect('/admin/aksesverifikator');

    }
    public function hapusaksesverifi(Request $request, $id)
    {
      verifikator::destroy($id);
      return back();
    }
}
