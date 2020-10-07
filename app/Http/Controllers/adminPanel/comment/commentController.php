<?php

namespace App\Http\Controllers\adminPanel\comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\comment\commentEditRequest;
use App\Http\Requests\admin\comment\commentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{

    public  function commentStore(commentRequest $request){

        Comment::create([

            'comment'=>$request->comment,

            'video_id'=>$request->id_comment,

            'statue'=>1,

            'user_id'=>462
        ]);

        return response()->json('ok');
   }

    public function commentedit(Request $request){

        $data = Comment::findOrFail($request->id);

        return response()->json($data);

    }

    public function commentupdate(commentEditRequest $request){

        $data = Comment::findOrFail($request->id_commentEdit);

        $data->update([
            'comment'=>$request->commentEdit
        ]);

        return response()->json('yes');

    }

    public function destroyComment(Request $request)
    {
        $id = $request->id;
        $id = Comment::findOrFail($id);
        $id->delete();
    }
}
