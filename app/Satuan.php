<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = 'satuans';
    protected $fillable = ['name_satuan','deskripsi'];
}
