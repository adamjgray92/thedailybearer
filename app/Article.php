<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'image_path', 'published', 'deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
