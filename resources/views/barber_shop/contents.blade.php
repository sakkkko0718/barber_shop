@extends('layouts.adminbase')

@section('content')
    <form action="/reservations.add" method="POST">
        @csrf
        <div>以下よりお選びください</div>
        <table class="table table-striped">
                <tr class="menu">
                    <th></th>
                    <th>メニュー</th>
                    <th>値段</th>
                    <th>目安施術時間</th>
                    <th></th>
                </tr>
            @foreach ($contents as $content)
                    <tr>
                        <td>{{$content->content_id}}</td>
                        <td>{{$content->menu}}</td>
                        <td>{{$content->price}}円</td>
                        <td>{{$content->time}}</td>
                        <td>
                            <input type="hidden" name="menu_id" value="{{$content->content_id}}">
                            <input type="submit" value="追加">
                        </td>
                    </tr>
            @endforeach
        </table>
    </form>
@endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }
</style>