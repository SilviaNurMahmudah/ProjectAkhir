<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $fillable = ['title', 'content', 'jenis_wisata', 'image'];
}
