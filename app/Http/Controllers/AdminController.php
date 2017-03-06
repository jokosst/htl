<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\admin;


class AdminController extends Controller
{
   public function user(){
    $sebagai = 'admin';
      $d = admin::where('sebagai', $sebagai)->get();
      return view('admin/user',['data' =>$d]);
    }
    public function kontributor(){
    $sebagai = 'kontributor';
      $d = admin::where('sebagai', $sebagai)->get();
      return view('admin/kontributor',['data' =>$d]);
    }
    public function verifikator(){
    $sebagai = 'verifikator';
      $d = admin::where('sebagai', $sebagai)->get();
      return view('admin/verifikator',['data' =>$d]);
    }
    public function aksesverifikator(){
    $sebagai = 'verifikator';
      $d = admin::where('sebagai', $sebagai)->get();
      return view('admin/akses_verifikator',['data' =>$d]);
    }
    public function tambahaksesverifikator(){
         $verifikator = 'verifikator';
          $kontributor = 'kontributor';
      $v = admin::where('sebagai', $verifikator)->get();
      $k = admin::where('sebagai', $kontributor)->get();
      return view('admin/tambah_aksesverifi',['dv' =>$v,'dk' =>$k]);
    }
    public function create(Request $request){
   $sebagai = 'admin';
        $tambah = new admin; //tambah data dengan eloquent
        $tambah->sebagai = $sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/user');

    }
    public function createverifikator(Request $request){
   $sebagai = 'verifikator';
        $tambah = new admin; //tambah data dengan eloquent
        $tambah->sebagai = $sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/verifikator');

    }
    public function createkontributor(Request $request){
   $sebagai = 'kontributor';
        $tambah = new admin; //tambah data dengan eloquent
        $tambah->sebagai = $sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/kontributor');

    }
    public function edit(Request $request,$id){
     $d = admin::find($id);
     return view('admin/edit_user',['data' =>$d]);
    }
     public function editverifikator(Request $request,$id){
     $d = admin::find($id);
     return view('admin/edit_verifikator',['data' =>$d]);
    }
    public function editkontributor(Request $request,$id){
     $d = admin::find($id);
     return view('admin/edit_kontributor',['data' =>$d]);
    }
    public function update(Request $request, $id){
   
        $tambah = admin::find($id);
       $tambah->sebagai = $request->sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/user');

    }
     public function updateverifikator(Request $request, $id){
   
        $tambah = admin::find($id);
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/verifikator');

    }
    public function updatekontributor(Request $request, $id){
   
        $tambah = admin::find($id);
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/kontributor');

    }
     public function hapus(Request $request, $id){
        admin::destroy($id);
            return redirect('/admin/user'); 
    }
    public function hapusverifikator(Request $request, $id){
        admin::destroy($id);
            return redirect('/admin/verifikator'); 
    }
    public function hapuskontributor(Request $request, $id){
        admin::destroy($id);
            return redirect('/admin/kontributor'); 
    }
}
