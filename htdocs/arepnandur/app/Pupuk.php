<?php

namespace arepnandur;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pupuk extends Eloquent
{
    protected $table = 'pupuks';

    protected $fillable = [
    	'nama', 'slug', 'harga', 'jenis', 'dsingkat', 'dpanjang'
    ];
}