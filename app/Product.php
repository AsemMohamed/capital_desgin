<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'type', 'url', 'price', 'image', 'seo', 'category', 'height', 'length', 'width'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->hasMany('App\Album');
    }
}
