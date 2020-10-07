<?php

namespace App\Http\Controllers\adminPanel\videos;

use App\DataTables\commentDataTable;
use App\DataTables\videoDataTable;
use App\DataTables\vidoeDataTable;
use App\traits\fileUpload;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\comment\commentEditRequest;
use App\Http\Requests\admin\comment\commentRequest;
use App\Http\Requests\admin\video\videoEditRequest;
use App\Http\Requests\admin\video\videoRequest;
use App\Models\Cat;
use App\Models\Comment;
use App\Models\Muslim;
use App\Models\Tag;
use App\Models\Video;
use App\traits\commentStore;
use Illuminate\Http\Request;

class videoController extends Controller
{


    use fileUpload;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(videoDataTable $dataTable){

        $cats = Cat::get();

        $muslims = Muslim::get();

        $tags = Tag::get();

        return $dataTable->render('adminPanel.videos.video',['cats'=>$cats,'muslims'=>$muslims,'tags'=>$tags]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(videoRequest $request)
    {

        $image = $this->fileUpload($request->file('image'),'uploads/videos');

        $day = date('d');

        $month = date('F');

        $year = date('Y');

        $create_muslim=Video::create([
            'name'=>$request->name,
            'url'=>$request->url,
            'desc'=>$request->desc,
            'muslim_id'=>$request->muslims,
            'cat_id'=>$request->cat,
            'status'=>$request->status,
            'image'=> $image,
            'day'=>$day,
            'month'=>$month,
            'year'=>$year,
            'meta_key'=>$request->meta_key,
            'meta_desc'=>$request->meta_desc,
        ]);
        if(isset($request->tags) && $request->tags !== ''){

            $create_muslim->tags()->sync($request->tags);
        }

        return response()->json([
            'msg'=>'تم التعديل بنجاح',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(commentDataTable $dataTable,$id)
    {

        $cats = Cat::get();

        $muslims = Muslim::get();

        $idData = Video::findOrFail($id);

        $tags = Tag::get();


        $selectedTag = Video::find($id)->tags()->get()->pluck('id')->toArray();

        return $dataTable->render('adminPanel.videos.edit.edit',['data'=>$idData,'cats'=>$cats,'muslims'=>$muslims,'tags'=>$tags,'selectTags'=>$selectedTag]);
        //return view('adminPanel.videos.edit.edit')->with(['data'=>$idData,'cats'=>$cats,'muslims'=>$muslims,'tags'=>$tags,'selectTags'=>$selectedTag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(videoEditRequest $request)
    {
        $userId = Video::findOrFail($request->id);



        $array = $request->all();

        if($request->hasFile('image')){

            $array['image'] = $this->fileUpload($request->file('image'),'uploads/videos');

            //$array = ['image'=>$image] + $array ;
        }
        else{

            unset($array['image']);
        }

        $updateUser = $userId->update($array);

        if(isset($request->tags) && $request->tags !=='')
        {
            $userId->tags()->sync($request->tags);
        }

        if($updateUser)
            return response()->json($userId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $id = Video::findOrFail($id);
        $id->delete();
    }



}
