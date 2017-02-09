<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Storage;
use App\Produk;

class ProdukController extends Controller
{
  //user
    public function index(){
      $d = Produk::all(); //eloquent view semua data
      $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get(); //query bulider ngelihat data dari katagori
      return view('welcome',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
    }
    public function bkcon(){
      $d = Produk::all(); //eloquent view semua data
      $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get(); //query bulider ngelihat data dari katagori
      return view('bkwelcome',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
    }
     public function sortir(){
      $d = Produk::all();
      $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get(); //query bulider ngelihat data dari katagori
      return view('sortir',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
    }
     public function katagori(Request $request,$katagori){
        $d = DB::table('produk_hukum')->where('katagori',$katagori)->get();
        $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get();
   // dd($d);
    return view('produk_hukum',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
    }
    public function lihatproduk(Request $request,$id){
     $d = Produk::find($id);
     $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get();
     return view('lihat',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum]);
    }
public function downloadproduk(Request $request,$dokumen)
    {
        $entry = Produk::where('dokumen', '=', $dokumen)->firstOrFail();
        $file = Storage::disk('local')->get($entry->dokumen);

 return (new Response($file, 200))->header('Content-Type', $entry->dokumen);
    }
     public function kontak(){
      $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get(); //query bulider ngelihat data dari katagori
      return view('kontak',['dataprodukhukum'=>$dataprodukhukum]);
    }
    public function cari(Request $request)
    {
        $strcari    = $request->strcari;
        $strkatagori = $request->strkatagori;
        if ($strcari=='0')
        {
            $strcari='';
        }

        if ($strkatagori=='0') {
            $strkatagori='';
        } else {
            $strkatagori = $strkatagori;
        }
      // $hasil =  DB::table('produk_hukum')->where('tahun', 'LIKE', "%$strcari%" ,'AND', "%$strmasalah%")->get();
        // $h = Produk::where('tahun', 'LIKE', '%' . $strcari . '%' ,'AND', '%' . $strmasalah . '%')->get();
        $h = Produk::where('tahun', 'LIKE', '%' . $strcari . '%')
                     ->where('katagori', 'LIKE', '%' . $strkatagori . '%')->get();
        return response()->json(['hasil'=>$h]);
    }


    //admin
    public function admin(){
      $d = Produk::all();
      return view('admin/index',['data' =>$d]);
    }
    public function tambah(Request $request){
      $file = $request->file('dokumen');
       $extension = $file->getClientOriginalExtension();
        $filename   = md5(time().rand()).".".$file->getClientOriginalExtension();
         Storage::disk('local')->put($filename,  File::get($file));

        $tambah = new Produk; //tambah data dengan eloquent
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;
        $tambah->dokumen = $filename;
        $tambah->save();

            return redirect('/admin');

        
    }
    public function view(Request $request,$id){
     $d = Produk::find($id);
     return view('admin/lihat',['data' =>$d]);
    }
    public function edit(Request $request,$id){
     $d = Produk::find($id);
     return view('admin/edit_produk',['data' =>$d]);
    }
    public function update(Request $request, $id){
      if($request->hasFile('dokumen')){
        $file = $request->file('dokumen');
        $extension = $file->getClientOriginalExtension();
        $filename   = md5(time().rand()).".".$file->getClientOriginalExtension();
         Storage::disk('local')->put($filename,  File::get($file));

       $tambah = Produk::find($id);
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;
        $tambah->dokumen = $filename;

        $tambah->save();

            return redirect('/admin');
      }else{
        $tambah = Produk::find($id);
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;

        $tambah->save();

            return redirect('/admin');
      }
      
    }
    public function hapus(Request $request, $id){
        Produk::destroy($id);
            return redirect('/admin');

        
    }
    
}
