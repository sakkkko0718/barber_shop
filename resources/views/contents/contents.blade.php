@extends('layouts.adminbase')

@section('content')
    <form action="{{ route('addToCart')}}" method="post">
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
                            <a href="{{ route('showCart', ['contentId' => $content->content_id]) }}">追加</a>
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