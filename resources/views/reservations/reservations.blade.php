@extends('layouts.adminbase')

@section('content')
        <table  class="table-striped table">
            <tr class="thead">
                <th></th>
                <th>予約ID</th>
                <th>ゲストID</th>
                <th>お名前</th>
                <th>電話番号</th>
                <th>メニュー</th>
                <th>値段</th>
                <th>目安施術時間</th>
                <th>施術日</th>
                <th>開始時間</th>
            </tr>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->reservation_id}}</td>
                <td>{{$reservation->user_id}}</td>

                @if($reservation->user)
                <td>{{$reservation->user->name}}</td>
                <td>{{$reservation->user->tel}}</td>
                @else
                <td style="color: red">キャンセルされました</td>
                <td style="color: red">キャンセルされました</td>
                @endif

                @foreach($reservation->contents as $content)
                <td>{{$content->menu}}</td>
                <td>{{number_format($content->price)}}円</td>
                <td>{{$content->time}}</td>
                @endforeach
                
                <td>{{$reservation->day}}</td>
                <td>{{$reservation->startTime}}</td>
            </tr>
            @endforeach
            
        </table>
        @endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }

    @media screen and (max-width: 640px) {
  .table-striped table {
    width: 80%;
  } 
  .table-striped .thead {
    display: none;
  }
  .table-striped tr,
  .table-striped td{
    display: block;
    width: 100%;
    padding: 5px;
    position: relative;
  }
  .table-striped td:first-child:before {
    background: #e9727e;
    box-sizing: border-box;
    color: #fff;
    font-weight: bold;
    height: 40px;
    padding: 10px;
    position: absolute;
    top: -41px;
    left: -0.2%;
    display: block;
    width: 100.5%;
  }
  .table-striped tr {
    margin-bottom: 40px;
  }
}
</style>