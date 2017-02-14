<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
   protected $guarded = [''];
   public $timestamps = false;
   public function submenu()
    {
        return $this->hasMany(Submenu::class);
    }
}
