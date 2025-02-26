<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitorCatalog extends Model
{
    protected $table = "monitor_catalogs";
    protected $guarded = false; // надо везде ставить

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
