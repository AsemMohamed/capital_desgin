<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class design extends Model
{
    protected $fillable = ['name', 'type', 'price', 'image'];
}
