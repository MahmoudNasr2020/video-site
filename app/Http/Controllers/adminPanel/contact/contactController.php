<?php

namespace App\Http\Controllers\adminPanel\contact;

use App\DataTables\contactDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\contact\contactRequest;
use App\Mail\contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function index(contactDataTable $dataTable)
    {
        return $dataTable->render('adminPanel.contact.contact');
    }

    public function delete(Request $request)
    {
        $id = Contact::findOrFail($request->id);

        $id->delete();

        return response()->json('done');
    }

    public function show(Request $request)
    {
        $id = Contact::findOrFail($request->id);


        return response()->json($id);
    }

    public function email(Request $request)
    {
        $id = Contact::findOrFail($request->id);


        return response()->json($id);
    }

    public function send(contactRequest $request)
    {
        $id = Contact::findOrFail($request->id);

        $array = $request->all();

        $name = $id->name;

        $yourmessage = $id->message;

        $array = ['name'=>$name,'yourmessage'=>$yourmessage] + $array;

       Mail::to($id->email)->send(new MailContact($array));

       return response()->json('yes');
    }
}
