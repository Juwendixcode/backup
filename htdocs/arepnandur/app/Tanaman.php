<?php

namespace arepnandur;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tanaman extends Eloquent
{
    protected $table = 'tanamans';

    protected $fillable = [
    	'nama', 'kpmj', 'kpmb', 'hpmj', 'hpmb', 'hpk', 'kpu', 'kps', 'kpk', 'kph', 'hbibit', 'hjual'
    ];
}