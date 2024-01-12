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

    public function addToCart($contentId){
        //選択されたコンテンツを追加
        //データベースから商品データを取得
        $content = Content::find($contentId);

        //カートがなければ新しく作成
        $cart = session()->get('cart', []);

        //カートに商品を追加
        $cart[] = [
            'content_id' => $content->content_id,
            'menu' => $content->menu,
            'price' => $content->price,
            'time' => $content->time,
        ];

        //セッションにカートのデータを保存(put)
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'カートに商品を追加しました');
    }

    public function showCart(Request $request){
        //カート内のコンテンツを取得して表示
        
        //セッション内のデータを取得
        $cartContents = session()->get('get',[]);

        return view('contents.add', ['cartContents' => $cartContents]);
    }
}