<?php

namespace App\Http\Controllers\website\contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\contact\contactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function send(contactRequest $request)
    {
        $information = $request->all();

        $send = Contact::create($information);

        if($send)
            return response()->json('yes');

    }
}
