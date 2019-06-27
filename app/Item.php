<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'image_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageUrlAttribute()
    {
        return config('app.s3_url') . '/' . $this->image_path;
    }
}
