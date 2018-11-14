<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function works(){
        return $this->belongsToMany('App\Work', 'item_tag', 'tag_id', 'item_id')->withTimestamps;
    }
}
