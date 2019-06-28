<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

        // if(cache::get('path')->has($this->image_path)) {
        //      return assets('images/' . $this->image_path);
        // } else {
        //      return config('app.s3_url') . '/' . $this->image_path;
        // }

        // return Storage::disk('s3')->url($this->image_path);
    }
}
