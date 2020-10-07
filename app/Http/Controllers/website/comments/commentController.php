<?php

namespace App\Http\Controllers\website\comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\comment\addCommentRequest;
use App\Http\Requests\website\comment\commentRequest;
use App\Models\Comment;
use App\Models\Video;
use App\traits\loadData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{

    use loadData;

    public function add(addCommentRequest $request)
    {


            $createComment = Comment::create([

                'comment'=>$request->addComment,

                'video_id'=>$request->video_id,

                'user_id'=>Auth::user()->id,
           ]);

           $comments = Comment::orderBy('id','desc')->limit(1)->get();

           $array = [];

           foreach($comments as $comment)
           {



            $dateNow = Carbon::now();

            //TimeZone::convertToLocal($comment->created_at);

            $dateComment = $comment->created_at;

            $realCommentDate=$dateNow->diffForHumans($dateComment);

            //dd(Carbon::now('Africa/Cairo'));

            $count =0;
            $style='';

            foreach($comment->likes as $like)
            {
                $count++;

                if(Auth::check() && Auth::user()->id == $like->user_id)
                {
                    $style = 'rgb(243, 62, 88)';
                }
            }


             $array['data'] = '<div class="p-3 bg-white mt-2 rounded comment_'.$comment->id.'">
             <div class="d-flex justify-content-between">

                 <div class="d-flex flex-row user">
                 <a href="'.route('website.profile',['id'=>$comment->user->id,'name'=>trim(str_replace(' ','_',$comment->user->name))]).'">
                     <img class="rounded-circle img-fluid img-responsive"
                     src="'.asset('uploads/videos/'.$comment->user->image ).'" width="40">
                     </a>

                     <div class="d-flex flex-column ml-2" style="margin-top: 3px;margin-right: 5px;">
                     <a href="'.route('website.profile',['id'=>$comment->user->id,'name'=>trim(str_replace(' ','_',$comment->user->name))]).'">
                         <span class="font-weight-bold">'
                              .$comment->user->name .' @
                             </span></a>';
                             if($comment->statue ==1){
                              $array['data'] .='
                                 <span  style="text-align: right;margin-right: 8px;font-weight: 500;direction:ltr;font-size: 10px">
                                 <i class="fas fa-user-shield"
                                 style="text-align: right;
                                        direction: rtl;
                                        float: right;
                                        margin-right: -8px;
                                        margin-top: 1px;
                                        margin-left: 5px;
                                        font-size: 11px;"></i>
                                    Admin
                                 </span>
                        ';
                             }

                             $array['data'] .='<span class="day" style="text-align: right;margin-right: 8px;font-weight: 500;direction:ltr">'.$realCommentDate.'</span>

                     </div>
                 </div>
                 <div class="d-flex align-items-center px-3 heart border">
                     <i class="fa fa-heart heart-icon like_comment" style="color:'.$style.';cursor:pointer"  data-commentId='.$comment->id.' id='.$comment->id.'></i>
                     <span class="ml-2" style="font-weight: 600;color: black;">'.$comment->likes->count().'</span>
                 </div>

             </div>
             <div class="comment-text text-justify mt-2">
                 <p style="margin-top:15px;font-weight: 600;padding-right: 20px;" class=commentAjax_'.$comment->id.'>' .$comment->comment.'</p>
             </div>';

             if(Auth::check()){

                 if(Auth::user()->id == $comment->user_id)
                 {
                     $array['data'].='
                     <div class="d-flex justify-content-end align-items-center comment-buttons mt-2 text-right">
                     <span class="mr-3 delete deleteComment" style="margin-left: 10px;font-weight: 500;" id='.$comment->id.'>Delete</span>
                         <button class="btn btn-success btn-sm border-0 px-3 updateCommentUser" id="'.$comment->id.'" type="button">
                             Edit</button>
                 </div>';
                 }



         }
           }

        return response()->json($array);
    }



    public function edit(Request $request)
    {
        $commentId = Comment::findOrFail($request->id);

        return response()->json($commentId);
    }

     public function update(commentRequest $request)
    {

        $id = Comment::findOrFail($request->idComment);

        $updateComment = $id->update([

            'comment'=>$request->commentUser,
        ]);


        return response()->json($id);
    }

    public function destory(Request $request){

            $id=Comment::findOrFail($request->id);

            $id->delete();

            return response()->json('yes');
    }
}
