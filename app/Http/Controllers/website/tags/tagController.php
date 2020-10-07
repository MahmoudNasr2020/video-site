<?php

namespace App\Http\Controllers\website\tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class tagController extends Controller
{
    public function index($id)
    {
        $tag = Tag::findOrFail($id);

        //$VideosAll = Video::where('muslim_id',$id)->orderBy('id','desc')->paginate(15);

        $VideosAll = Video::publish()->whereHas('tags',function($query) use($id){

            $query->where('tag_id',$id);

        })->get();

        return view('website.tags.tags',['VideosAll'=>$VideosAll,'tag'=>$tag]);
    }
}
