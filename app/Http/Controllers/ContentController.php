<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index(Request $request){
        $contents = Content::all();
        return view('barber_shop.contents',['contents'=>$contents]);
    }
}
