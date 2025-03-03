<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $guarded = false;

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
