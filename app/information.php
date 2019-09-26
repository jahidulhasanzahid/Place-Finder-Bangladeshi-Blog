<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    //
    public $fillable = [
    'division',
    'area',
    'title',
    'description',
    'image',
    'address'
  ];
}
