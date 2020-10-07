<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muslim extends Model
{
    protected $table = 'muslims';

    protected $fillable = ['name','meta_key','meta_desc'];

    public function videos(){

        return $this->hasMany('App\Models\Video','muslim_id');
    }
}
