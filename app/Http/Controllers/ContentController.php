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

    public function add(Request $request){
        return view('contents.add');
    }

    public function show(Request $request, $content_id){
        // セッションにデータを保存
        $request->session()->put('content_id', $content_id);
    
        // もしセッションにデータが存在すれば表示
        if ($content_id) {
            $contents = Content::where('content_id', $content_id)->get();
            return view('contents.add', ['contents' => $contents]);
        } else {
            return redirect()->route('contents.add')->with('message', 'まだ追加していません');
        }
    }

    //追加（一時保存）した後の動き(put)
    public function create(Request $request){
        // リクエストからデータを取得
        $contents = $request->input('content_id');

        // データをセッションに保存
        $request->session()->put('contents', $contents);

        // データの保存が完了したらリダイレクト
        return redirect()->route('contents.add');
    }
}