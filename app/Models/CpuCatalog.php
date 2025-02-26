<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CpuCatalog extends Model
{
    protected $table = "cpu_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
