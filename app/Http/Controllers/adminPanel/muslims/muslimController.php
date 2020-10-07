<?php

namespace App\Http\Controllers\adminPanel\muslims;

use App\DataTables\muslimDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\muslim\muslimRequest;
use App\Models\Muslim;
use Illuminate\Http\Request;

class muslimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(muslimDataTable $dataTable){
        return $dataTable->render('adminPanel.muslims.muslim');


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
    public function store(muslimRequest $request)
    {
        $arraymuslim=$request->all();
        $create_muslim=Muslim::create($arraymuslim);
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
        $idData = Muslim::findOrFail($id);
        return response()->json($idData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(muslimRequest $request)
    {
        $userId = Muslim::findOrFail($request->id);
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
        $id = Muslim::findOrFail($id);
        $id->delete();
    }
}
