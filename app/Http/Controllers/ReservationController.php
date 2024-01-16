<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Content;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request){
        $reservations = Reservation::all();
        return view('reservations.reservations',['reservations'=>$reservations]);
    }

    public function add(Request $request){
        return view('reservations/add');
    }

    // ↓買い物かごに１つしか入れない場合の書き方ここから↓
    public function content_get(Request $request){
        //Contentモデルからidを取得
        $reservation = Content::find($request->content_id);
        return view('reservations.add',['form'=>$reservation]);
    }

    public function show(Request $request){
        //バリデーションルールの定義（モデルから）
        $this->validate($request, Reservation::$rules);
        //インスタンスを取得
        $reservation = Content::find($request->content_id);
        $form = $request->all();
        unset($form['_token']);
        //送信されたフォームの内容を反映、saveで呼び出し
        $reservation->fill($form)->save();
        return redirect('reservations.add');
    }
    // ↑買い物かごに１つしか入れない場合の書き方ここまで↑

    // DBへ保存処理
    public function store(Request $request){
        //バリデーションルールの定義（モデルから）
        $this->validate($request,Reservation::$rules);
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        return redirect('reservation.complete');
    }
}
