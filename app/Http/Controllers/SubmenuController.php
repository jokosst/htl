<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Submenu;

class SubmenuController extends Controller
{
   public function submenu(){
      $d = Submenu::all();
      return view('admin/submenu',['data' =>$d]);
    }
}
