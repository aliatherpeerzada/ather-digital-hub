<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    public function getImageUrlAttribute()
    {
        if (\Illuminate\Support\Str::startsWith($this->main_image, 'img/')) {
            return asset($this->main_image);
        }
        return \Illuminate\Support\Facades\Storage::url($this->main_image);
    }
}
