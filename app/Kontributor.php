<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontributor extends Model
{
   protected $table = 'user';
   protected $guarded = [''];
   public $timestamps = false;

}
