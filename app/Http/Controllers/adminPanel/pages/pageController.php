<?php

namespace App\Http\Controllers\adminPanel\pages;

use App\DataTables\pageDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\page\pageRequest as PagePageRequest;
use App\Http\Requests\pageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class pageController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(pageDataTable $dataTable){
        return $dataTable->render('adminPanel.pages.pages');


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
    public function store(PagePageRequest $request)
    {
        $arraymuslim=$request->all();
        $create_muslim=Page::create($arraymuslim);
        if($create_muslim)
            return response()->json([
                'msg'=>'<div class="aler alert-success">تمت الاضافة بنجاح</div>',

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
    public function edit(Request $request)
    {
        $id = $request->id;
        $idData = Page::findOrFail($id);
        return response()->json($idData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagePageRequest $request)
    {
        $userId = Page::findOrFail($request->id);
        $updateArray=$request->all();
        $updateUser = $userId->update($updateArray);
        if($updateUser)
            return response()->json([
                'msg'=>'تم التعديل بنجاح',
            ]);
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
        $id = Page::findOrFail($id);
        $id->delete();
    }
}
