<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags_Video extends Model
{
    protected $table = 'tages_videos';

    protected $fillable = ['video_id','tag_id','created_at','updated_at'];
}
