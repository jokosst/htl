<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifikator extends Model
{
     protected $table = 'tbl_verifi';
   protected $guarded = [''];
   public $timestamps = false;

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }

}
