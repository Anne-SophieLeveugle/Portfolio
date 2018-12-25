<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    protected $fillable = ['title', 'content'];

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'item_tag', 'item_id', 'tag_id')->withTimestamps();
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return ucfirst($value);
    }
}
