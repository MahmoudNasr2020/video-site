<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['name','created_at','updated_at'];

    public function tags(){

        return $this->belongsToMany('App\Models\Video','tags_videos');
    }
}
