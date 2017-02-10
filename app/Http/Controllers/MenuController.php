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
}