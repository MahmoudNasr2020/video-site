<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\adminPanel\adminPanalController;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Video;

class homeController extends adminPanalController
{
    public function index(){
        $videos = Video::count();

        $comemnts = Comment::count();

        $likes = Like::count();

        $count = 0;

        $video_pag = Video::limit(5)->orderBy('id','desc')->get();

        $comment_pag = Comment::limit(5)->orderBy('id','desc')->get();

        $views = Video::get();

        foreach($views as $view)
        {
            $count += $view->views;
        }

        return view('adminPanel.home',['videos'=>$videos,'comments'=>$comemnts,'likes'=>$likes,'views'=>$count,'video_pag'=>$video_pag,'comment_pag'=>$comment_pag]);

    }
}
