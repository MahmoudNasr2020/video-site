<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikeComment extends Model
{
    public $table = 'like_comment';

   protected $fillable = ['like','user_id','comment_id'];



   public function user()
   {
       return $this->belongsTo('App\Models\User','user_id');
   }
    public function video()
   {
       return $this->belongsTo('App\Models\Video','video_id');
   }
    public function comment()
   {
       return $this->belongsTo('App\Models\Comment','video_id');
   }
}
