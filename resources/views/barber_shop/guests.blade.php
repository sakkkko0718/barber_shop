@extends('layouts.adminbase')

@section('content')
        <table class="table table-striped">
            <tr class="menu">
                <th>ID</th>
                <th>お名前</th>
                <th>ご住所</th>
                <th>メール</th>
                <th>お電話番号</th>
            </tr>
            @foreach ($guests as $guest)
            <tr>
                <td>{{$guest -> guest_id}}</td>
                <td>{{$guest -> name}}</td>
                <td>{{$guest -> address}}</td>
                <td>{{$guest -> email}}</td>
                <td>{{$guest -> tel}}</td>
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