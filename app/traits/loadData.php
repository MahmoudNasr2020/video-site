<?php
namespace App\traits;

use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Shared\TimeZone;

trait loadData {

    public function load_data(Request $request){

        if($request->ajax()){

            $video = Video::findOrFail($request->idVideo);

            if($request->id > 0)
            {

                $comments = $video->Comments()->where('id','<',$request->id)->orderBy('id','desc')->limit(10)->get();

            }
            else
            {
                $comments =$video->Comments()->orderBy('id','desc')->limit(10)->get();
            }
            $data = [];

            $output='';
            $last_id='';

            if( ! $comments->isEmpty())
            {

                $count =0;

                foreach($comments as $comment)
                {

                    $dateNow = Carbon::now();

                    //TimeZone::convertToLocal($comment->created_at);

                    $dateComment = $comment->created_at;

                    $realCommentDate=$dateNow->diffForHumans($dateComment);

                    //dd(Carbon::now('Africa/Cairo'));
                    $count = 0;
                    $style = '';
                    foreach($comment->likes as $like)
                    {
                        $count ++;

                        if(Auth::check() && Auth::user()->id == $like->user_id)
                        {
                            $style = 'rgb(243, 62, 88)';
                        }
                    }


                    $output.=' <div class="p-3 bg-white mt-2 rounded comment_'.$comment->id.'">
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
                                        $output .='
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

                                    $output .='<span class="day" style="text-align: right;margin-right: 8px;font-weight: 500;direction:ltr">'.$realCommentDate.'</span>

                            </div>
                        </div>
                        <div class="d-flex align-items-center px-3 heart border">
                            <i class="fa fa-heart heart-icon  like_comment" style="color:'.$style.';cursor:pointer"  data-commentId='.$comment->id.' id='.$comment->id.'></i>
                            <span class="ml-2" style="font-weight: 600;color: black;">'. $count.'</span>
                        </div>

                    </div>
                    <div class="comment-text text-justify mt-2">
                        <p style="margin-top:15px;font-weight: 600;padding-right: 20px;" class=commentAjax_'.$comment->id.'>' .$comment->comment.'</p>
                    </div>';

                    if(Auth::check()){

                        if(Auth::user()->id == $comment->user_id){
                            $output.='
                            <div class="d-flex justify-content-end align-items-center comment-buttons mt-2 text-right">
                            <span class="mr-3 delete deleteComment" style="margin-left: 10px;font-weight: 500;" id='.$comment->id.'>Delete</span>
                                <button class="btn btn-success btn-sm border-0 px-3 updateCommentUser" id="'.$comment->id.'" type="button">
                                    Edit</button>
                        </div>';
                        }
                    }

                    $output.='</div>';

                    $last_id = $comment->id;
                }

                $output.='
                <div id="load_more">
                        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">المزيد من التعليقات</button>
                    </div>';

            }

            else
            {

                $output.='
                <div id="load_more">
                <button type="button" name="load_more_button" class="btn btn-info form-control">لا  توجد تعليقات اخري</button>
                </div>';

            }

            return response()->json(['data'=>$output]);
        }
    }
}
