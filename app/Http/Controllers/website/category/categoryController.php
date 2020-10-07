<?php

namespace App\Http\Controllers\website\category;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Video;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index($id)
    {
        $cat = Cat::findOrFail($id);

        $VideosAll = Video::publish()->where('cat_id',$id)->orderBy('id','desc')->paginate(15);

        return view('website.category.category',['VideosAll'=>$VideosAll,'cat'=>$cat]);
    }
}
