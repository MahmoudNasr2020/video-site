<?php

namespace App\Http\Controllers\website\muslim;

use App\Http\Controllers\Controller;
use App\Models\Muslim;
use App\Models\Video;
use Illuminate\Http\Request;

class muslimController extends Controller
{
    public function index($id)
    {
        $muslim = Muslim::findOrFail($id);

        $VideosAll = Video::publish()->where('muslim_id',$id)->orderBy('id','desc')->paginate(15);

        return view('website.muslims.muslim',['VideosAll'=>$VideosAll,'muslim'=>$muslim]);
    }
}
