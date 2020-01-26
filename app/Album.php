<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'image', 'seo', 'product_id', 'category'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
