<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index(Request $request){
        $contents = Content::all();
        return view('contents/contents', ['contents' => $contents]);
    }

    // public function show(Request $request, $content_id){
    //     $content = Content::find('content_id');
    //     return view('reservations.add', ['content' => $content]);
    // }

    //sessionの設定（保存）
    // public function content_put(Request $request){
    //     $content = $request->input;
    //     $request->session()->put('content',$content);
    //     return redirect('reservations/add');
    // }

    
}