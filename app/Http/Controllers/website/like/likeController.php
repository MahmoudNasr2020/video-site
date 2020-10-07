<?php

namespace App\Http\Controllers\website\like;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\LikeComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class likeController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;

        $video_id = $request->video_id;

        $like = Like::where('user_id',$user_id)->where('video_id',$video_id)->first();

        $data = '';

        if(!$like)
        {
            Like::create([
                'like'=>1,
                'user_id'=>$user_id,
                'video_id'=>$video_id
            ]);

            $data=1;

        }

        else
        {
            $like->delete();

            $data=0;
        }

        return response()->json(['data'=>$data]);
    }

    public function comment(Request $request)
    {

        $array['data']='';

        $user_id = Auth::user()->id;

        $like = LikeComment::where('comment_id',$request->commentId)->where('user_id',$user_id)->first();

        if(!$like)
        {
            LikeComment::create([
                'like'=>1,
               'user_id'=>$user_id,
               'comment_id'=>$request->commentId
            ]);

            $array['data']=1;
        }
        else
        {
            $like->delete();

            $array['data']=0;
        }

        return response()->json($array);
    }
}
