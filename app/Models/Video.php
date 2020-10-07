<?php

namespace App\Models;

use App\scopes\publish;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = ['name','url','desc','status','day','month','year','views','image','muslim_id','cat_id','meta_key','meta_desc'];


    public function muslim(){

        return $this->belongsTo('App\Models\Muslim','muslim_id');
    }
    public function cat(){

        return $this->belongsTo('App\Models\Cat','cat_id');
    }

    public function tags(){

        return $this->belongsToMany('App\Models\Tag','tags_videos');
    }

    public function comments(){

        return $this->hasMany('App\Models\Comment','video_id');
    }

    public function likes(){

        return $this->hasMany('App\Models\Like','video_id');
    }

    public function getStatusAttribute($val){
        return $val === 1 ?'publish':'hidden';
    }
    public function scopePublish($q){
        return $q->where('status',1);
    }


}

