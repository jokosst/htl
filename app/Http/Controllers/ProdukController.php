<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Auth;
use Storage;
use App\Produk;
use App\Submenu;
use App\Menu;



class ProdukController extends Controller
{
  //user
    public function index(){
      $kategoris = Menu::all()->load('Submenu'); //menu submenu dinamis
      $d = Produk::all();
      $m = DB::table('sub_menu')->select('nama_submenu')->get();
      
      return view('welcome', compact('kategoris'),['data' =>$d, 'pilih' =>$m ]);

      
      // $dataprodukhukum = DB::table('produk_hukum')->select('katagori')->groupby('katagori')->get();
      //  $katagori = DB::table('sub_menu')->select('nama_submenu')->get();
      // return view('welcome',['data' =>$d,'dataprodukhukum'=>$dataprodukhukum, 'kat'=>$katagori]);

      
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
         $kategoris = Menu::all()->load('Submenu');
   // dd($d);
    return view('produk_hukum', compact('kategoris'), ['data' =>$d]);
    }
    public function lihatproduk(Request $request,$id){
     $d = Produk::find($id);
     $kategoris = Menu::all()->load('Submenu');
     return view('lihat', compact('kategoris'), ['data' =>$d]);
    }

    //download
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
         $iduser = Auth::user()->id; 
        
        $tambah = new Produk; //tambah data dengan eloquent
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;
        $tambah->dokumen = $filename;
        $tambah->admin_id = $iduser;
        $tambah->save();

            return redirect('/admin');

        
    }
    public function view(Request $request,$id){
     $d = Produk::find($id);
     return view('admin/lihat',['data' =>$d]);
    }
    public function edit(Request $request,$id){
     $d = Produk::find($id);
     $s = Submenu::all();
     return view('admin/edit_produk',['data' =>$d, 'ds' =>$s]);
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

//kontributor
     public function kontributor(){
       $iduser = Auth::user()->id;
      // echo $iduser;
        $d = Produk::all()->where('admin_id','=',$iduser);            
       return view('kontributor/index',['data' =>$d]);
    }
     public function tambahproduk(Request $request){
      $file = $request->file('dokumen');
       $extension = $file->getClientOriginalExtension();
        $filename   = md5(time().rand()).".".$file->getClientOriginalExtension();
         Storage::disk('local')->put($filename,  File::get($file));
        
        $iduser = Auth::user()->id; 

        $tambah = new Produk; //tambah data dengan eloquent
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;
        $tambah->dokumen = $filename;
        $tambah->admin_id = $iduser;
        $tambah->save();

            return redirect('/kontributor');

        
    }
    public function viewkontributor(Request $request,$id){
     $d = Produk::find($id);
     return view('kontributor/lihat',['data' =>$d]);
    }
    public function editkontributor(Request $request,$id){
     $d = Produk::find($id);
     $s = Submenu::all();
     return view('kontributor/edit_produk',['data' =>$d,'ds' =>$s]);
    }
    public function updatekontributor(Request $request, $id){
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

            return redirect('/kontributor');
      }else{
        $tambah = Produk::find($id);
        $tambah->tahun = $request->tahun;
        $tambah->nomor = $request->nomor;
        $tambah->tentang = $request->tentang;
        $tambah->katagori = $request->katagori;
        $tambah->masalah = $request->masalah;
        $tambah->bidang = $request->bidang;

        $tambah->save();

            return redirect('/kontributor');
      }
      
    }
    public function hapuskontributor(Request $request, $id)
    {
        Produk::destroy($id);
            return redirect('/kontributor');
    }
    
}
