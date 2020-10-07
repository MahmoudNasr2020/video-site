<?php

namespace App\Http\Controllers\website\video;

use App\Events\viewerEvent;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\traits\loadSearch;
use App\traits\loadVideos;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function index($id)
    {
        $video = Video::publish()->findOrFail($id);

        //$VideosAll = Video::where('muslim_id',$id)->orderBy('id','desc')->paginate(15);

        event(new viewerEvent($video));

        return view('website.video.video',['video'=>$video]);
    }

    public function showVideos()
    {

        return view('website/video/index');
    }

    public function search()
    {

        if(request()->has('search') && request()->get('search') != '')
        {
            $videos = Video::publish()->where('name','like','%'.request()->get('search').'%')->orderby('id','desc')->paginate(15);

            //dd($videos);

            return view('website.video.search',['videos'=>$videos]);
        }
        else{
            return view('errors.404');
        }
    }

    use loadVideos;

    use loadSearch;
}
