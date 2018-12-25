<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['imagepath', 'work_id'];

    public function work(){
        return $this->belongsTo('App\Work')->withTimestamps;
    }
}
