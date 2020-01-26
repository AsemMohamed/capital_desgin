<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    protected $fillable = ['image', 'url', 'title', 'description', 'Additional_field'];
}
