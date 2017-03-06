<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
   protected $table = 'sub_menu';
   protected $guarded = [''];
   public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
     public function verifikator()
    {
        return $this->hasMany(verifikator::class);
    }
}
