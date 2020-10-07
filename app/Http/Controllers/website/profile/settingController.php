<?php

namespace App\Http\Controllers\website\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\profile\settingRequest;
use App\Models\User;
use App\traits\fileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class settingController extends Controller
{

    use fileUpload;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $id = User::findOrFail($id);

        return view('website.profile.setting',['user'=>$id]);
    }
    public function edit(Request $request)
    {
        $id = User::findOrFail($request->id);

        return response()->json($id);
    }

    public function update(settingRequest $request)
    {
        $id = User::findOrFail($request->id);

        $array  = $request->all();

        if($request->has('password') && $request->get('password') != '')
        {

            $array['password'] = Hash::make($request->password);

        }
        else
        {
            unset($array['password']);
        }

        if($request->hasFile('image'))
        {
            $array['image'] = $this->fileUpload($request->file('image'),'uploads/videos');

        }


        $update = $id->update($array);

        if($update)

            return response()->json($id);


    }
}
