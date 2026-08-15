<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function getImageUrlAttribute()
    {
        if (\Illuminate\Support\Str::startsWith($this->main_image, 'img/')) {
            return asset($this->main_image);
        }
        return \Illuminate\Support\Facades\Storage::url($this->main_image);
    }
}
