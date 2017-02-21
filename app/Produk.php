<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
   protected $table = 'produk_hukum';
  // protected $fillable = ['id','tahun','nomor','tentang','katagori','masalah','bidang','dokumen'];
   protected $guarded = [''];
   protected $dates = ['tgl'];
   public $timestamps = false;
}
