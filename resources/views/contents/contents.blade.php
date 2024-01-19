@extends('layouts.adminbase')

@section('content')
        <div>以下よりお選びください</div>
        <table class="table-striped table">
                <tr class="menu">
                    <th></th>
                    <th>メニュー</th>
                    <th>値段</th>
                    <th>目安施術時間</th>
                    <th></th>
                </tr>
            @foreach ($contents as $content)
                    <tr>
                        <form action="reservation/add" method="post">
                        {{-- <form action="/reservations/add" method="post"> --}}
                        <td>{{$content->content_id}}</td>
                        <td>{{$content->menu}}</td>
                        <td>{{number_format($content->price)}}円</td>
                        <td>{{$content->time}}</td>
                        <td>
                            @csrf
                            <a href="{{ route('contentget', ['content_id' => $content->content_id]) }}" class="btn btn-secondary btn active" role="button" aria-pressed="true">追加</a>
                        </form>
                        </td>
                    </tr>
            @endforeach
        </table>
@endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }
    .table-striped tbody tr:nth-child(odd) {
        background-color: #dbb875;
    }

    .table-striped tbody tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>