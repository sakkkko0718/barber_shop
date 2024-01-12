@extends('layouts.adminbase')

@section('content')
    <div class="container">
        <h2>予約内容</h2>
        <h6>※まだ予約は完了しておりません</h6>

        @if(count($cartContents) > 0)
        {{-- カート内のコンテンツが1以上ある時 --}}
            <table class="table table-striped">
                <tr>
                    <th></th>
                    <th>メニュー</th>
                    <th>値段</th>
                    <th>目安施術時間</th>
                    <th></th>
                </tr>
            @foreach ($cartContents as $content)
                <tr>
                    <td>{{$content->content_id}}</td>
                    <td>{{$content->menu}}</td>
                    <td>{{$content->price}}円</td>
                    <td>{{$content->time}}</td>
                </tr>
            @endforeach
            </table>
        @else
        {{-- カート内のコンテンツが空の時 --}}
            <br>
            <p>カートは空です。</p>
        @endif
    </div>
@endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }
</style>