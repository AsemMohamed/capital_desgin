<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arrival extends Model
{
    protected $fillable = ['name', 'type', 'url', 'price', 'image', 'seo', 'height', 'length', 'width'];
}
