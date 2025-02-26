<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherCatalog extends Model
{
    protected $table = "other_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
