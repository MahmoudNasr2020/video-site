<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cats';

    protected $fillable = ['name','meta_key','meta_desc'];

    public function videos(){

        return $this->hasMany('App\Models\Video','cat_id');
    }
}
