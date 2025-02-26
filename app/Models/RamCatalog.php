<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamCatalog extends Model
{
    protected $table = "ram_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
