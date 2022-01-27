<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepages";
    protected $Fillable = [
        'test',
        'popular',
        'name',
        'image',
        'price'
    ];
}
