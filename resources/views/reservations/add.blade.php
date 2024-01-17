@extends('layouts.adminbase')

@section('content')
<div class="container">
    <h2>予約画面</h2>
    <h6>※まだ予約は完了しておりません</h6>

<form action="{{route('reservationsStore')}}" method="post">
    <table class="table table-striped">
        <tr>
            <th></th>
            <th>メニュー</th>
            <th>値段</th>
            <th>目安施術時間</th>
            <th>施術希望日</th>
            <th>開始時間</th>
        </tr>
        <tr>
            {{-- 買い物かごに１つしか入れない場合の書き方 --}}
            {{-- 取得したデータ（id）をformにぶち込む作戦 --}}
            @csrf
            <input type="hidden" name="content_id" value="{{$form->content_id}}">
            @if($form != null)
                <td>{{$form->content_id}}</td>
                <td>{{$form->menu}}</td>
                <td>{{number_format($form->price)}}円</td>
                <td>{{$form->time}}</td>
                <td><input type="date" name="day" value="{{$form->day}}"></td>
                <td>
                    <input type="time" step="1800" list="time-list" min="10:00" max="15:00" name="startTime" value="{{$form->startTime}}">
                    <datalist id="time-list">
                        <option value="10:00"></option>
                        <option value="10:30"></option>
                        <option value="11:00"></option>
                        <option value="11:30"></option>
                        <option value="12:00"></option>
                        <option value="12:30"></option>
                        <option value="13:00"></option>
                        <option value="13:30"></option>
                        <option value="14:00"></option>
                        <option value="14:30"></option>
                        <option value="15:00"></option>
                    </datalist>
                </td>
        </tr>
    </table>
    <div class="next-item">
        <p>この内容で予約を完了しますか？</p>
        <input type="submit" value="はい">
        <a href="{{route('index')}}" class="btn btn-secondary btn active" role="button" aria-pressed="true">いいえ</a>
    </div>
</form>
            @else
            {{-- エラーが出てこれらは表示されないが一応設定 --}}
            <p>中身が空です。メニューを追加してください。</p>
            <a href="/contents">戻る</a>
        </tr>
    </table>
            @endif
            {{-- 買い物かごに１つしか入れない場合の書き方 --}}
</div>
@endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }
</style>