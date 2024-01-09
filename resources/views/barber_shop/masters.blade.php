@extends('layouts.adminbase')

@section('content')
        <table>
            <tr>
                <td></td>
                <td>メニュー</td>
            </tr>
            @foreach ($masters as $master)
            <tr>
                <td>{{$master -> master_id}}</td>
                <td>{{$master -> type}}</td>
                <td><a href=""><img src="{{asset('image/master'.$master->master_id.'.png')}}" alt="" width="100px" height="100px"></a></td>
            </tr>
            @endforeach
        </table>
@endsection