<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'type', 'url', 'price', 'image', 'seo', 'height', 'length', 'width'];
}
