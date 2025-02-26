<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GpuCatalog extends Model
{
    protected $table = "gpu_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
