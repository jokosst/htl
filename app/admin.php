<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
   protected $table = 'admin';
   protected $guarded = [''];
   public $timestamps = false;

   protected $hidden = [
        'password', 'remember_token',
    ];
}
