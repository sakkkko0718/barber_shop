@extends('layouts.adminbase')

@section('content')
        <table  class="table table-striped">
            <tr class="menu">
                <th></th>
                <th>予約ID</th>
                <th>ゲストID</th>
                <th>お名前</th>
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
                <td>{{$reservation->user->name}}</td>

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
</style>