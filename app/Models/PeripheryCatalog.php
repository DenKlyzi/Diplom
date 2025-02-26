<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeripheryCatalog extends Model
{
    protected $table = "periphery_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
