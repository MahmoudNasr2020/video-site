<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['comment','statue','user_id','video_id'];


    public function video(){

        return $this->belongsTo('App\Models\Video','video_id');
    }
    public function user(){

        return $this->belongsTo('App\Models\User','user_id');
    }
    public function likes(){

        return $this->hasMany('App\Models\LikeComment','comment_id');
    }

}
