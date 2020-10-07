<?php

namespace App\Http\Controllers\website\welcome;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Video;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        $Videos = Video::get();


        $views = 0;

        foreach($Videos as $Video)
        {

          $views += $Video->views;

        }

        $commentTotal = Comment::count();

        $videosTotal = Video::publish()->count();

        $videosWelcome = Video::publish()->orderBy('id','desc')->limit(6)->get();

        $likes = Like::count();


        return view('welcome',['videosWelcome'=>$videosWelcome,'videosTotal'=>$videosTotal,'views'=>$views,'commentTotal'=>$commentTotal,'likes'=>$likes]);


    }
}
