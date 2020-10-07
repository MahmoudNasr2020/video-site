<?php

namespace App\Http\Controllers\website\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile($id)
    {
        $id = User::findOrFail($id);

        return view('website.profile.profile',['user'=>$id]);

    }
}
