<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
