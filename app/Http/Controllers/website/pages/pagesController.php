<?php

namespace App\Http\Controllers\website\pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index($id)
    {
        $page = Page::findOrFail($id);

        return view('website/pages/page',['page'=>$page]);
    }
}
