<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\admin;


class AdminController extends Controller
{
   public function user(){
      $d = admin::all();
      return view('admin/user',['data' =>$d]);
    }
    public function create(Request $request){
   
        $tambah = new admin; //tambah data dengan eloquent
        $tambah->sebagai = $request->sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/user');

    }
    public function edit(Request $request,$id){
     $d = admin::find($id);
     return view('admin/edit_user',['data' =>$d]);
    }
    public function update(Request $request, $id){
   
        $tambah = admin::find($id);
       $tambah->sebagai = $request->sebagai;
        $tambah->username = $request->username;
         $tambah->password = bcrypt($request->password);
        $tambah->save();

            return redirect('/admin/user');

    }
     public function hapus(Request $request, $id){
        admin::destroy($id);
            return redirect('/admin/user');

        
    }
}
