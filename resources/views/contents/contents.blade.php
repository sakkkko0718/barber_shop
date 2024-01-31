@extends('layouts.adminbase')

@section('content')
<div class="container text-center">
    <div class="row">
        {{-- 予約画面 --}}
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312z"/>
              </svg>
            <p>予約画面</p>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </div>
        {{-- 利用者入力画面 --}}
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306"/>
              </svg>
            <p>確認画面</p>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </div>
        {{-- 完了画面 --}}
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-3-circle" viewBox="0 0 16 16">
                <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318"/>
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
            </svg>
            <p>予約完了</p>
        </div>
    </div>
</div>
        <div>
            <h1>メニュー</h1>
            <h4>ご予約の際は予約ボタンを押して次へ進んでください。</h4>
            <h6>※ログインが必須です。</h6>
            <h6 style="color: red">※訪問サービスはお電話のみの受付です。</h6>
        </div>
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
                            <a href="{{ route('contentget', ['content_id' => $content->content_id]) }}" class="btn btn-secondary btn active" role="button" aria-pressed="true">予約</a>
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