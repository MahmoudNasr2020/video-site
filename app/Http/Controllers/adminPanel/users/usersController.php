<?php

namespace App\Http\Controllers\adminPanel\users;

use App\DataTables\userDataTable;
use App\Http\Controllers\adminPanel\adminPanalController;
use App\Http\Requests\admin\updateUserRequest;
use App\Http\Requests\admin\userRequest;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Hash;

class usersController extends adminPanalController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(userDataTable $dataTable){
        return $dataTable->render('adminPanel.users.users');


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
    public function store(userRequest $request)
    {
        $create_user=User::create([
            'name' =>  $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
        ]);
        if($create_user)
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
        $idData = User::find($id);
        return response()->json($idData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUserRequest $request)
    {
        $userId = User::findOrFail($request->id);

        $updateArray = $request->all();

        if(isset($updateArray['password']) && $updateArray['password' ]!=''){

            $updateArray['password'] =  Hash::make($request->password);
        }
        else{
            unset($updateArray['password']);
        }
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
        $id = User::findOrFail($id);
        $id->delete();
    }
}
