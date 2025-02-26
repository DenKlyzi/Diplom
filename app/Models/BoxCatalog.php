<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoxCatalog extends Model
{
    protected $table = "box_catalogs";
    protected $guarded = false;

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
