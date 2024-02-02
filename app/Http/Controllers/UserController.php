<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //表示
    public function index(Request $request) {
        $user = User::find(auth()->id());
        $user->reservations = $user->reservations()->orderByDesc('created_at')->paginate(10);
        return view('dashboard',['user' => $user]);
    }

    //削除
    public function del(Request $request,$id){
        // Userモデルから情報を見つける
        $user = User::find(auth()->id());
        // ユーザーの該当する予約の情報を取得
        $reservation = $user->reservations()->find($id);
        // 取得した情報を削除
        $reservation->delete();
        // 削除したらダッシュボードへ
        return redirect('dashboard');
    }

    //検索
    public function search(Request $request){
        // 検索ここから
        $from = $request->input('from');
        // ここまで検索
        $until = $request->input('until');

        //日付のインスタンスを作成（文字列となってしまっている↑を日付にする）
        $fromDate = Carbon::parse($from);
        $untilDate = Carbon::parse($until);

        //Userモデルから情報を見つける（ユーザーの予約履歴を表示）
        $user = User::find(auth()->id());
        //reservationsテーブルのdayカラムから$fromDate~$untilDateを取得
        $user->reservations = $user->reservations()->whereBetween('day',[$fromDate,$untilDate])->get();
        return view('dashboard',['user' => $user]);
    }

}
