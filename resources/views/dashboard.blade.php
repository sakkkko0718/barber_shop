<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2> --}}
        <h1 class="guest-name">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
              <p>【 {{ Auth::user()->name}} 】 さんのマイページ</p>
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- ここから施術日で検索 --}}
            <div class="mypage-search">
                <div class="d-flex justify-content-center">
                    <p>施術日の検索</p>
                    <form action="{{route('dashboard.search')}}" method="get">
                        @csrf
                        <input type="date" name="from" style="width: 150px">
                        <span>～</span>
                        <input type="date" name="until" style="width: 150px">
                        <input type="submit" class="btn btn-secondary btn active" value="検索" style="border: #595959 solid 1px; padding: 8px; margin: 10px;">
                    </form>
                </div>
            </div>
            {{-- 施術日で検索ここまで --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    @foreach ($user->reservations as $key=>$item)
                    <table class="mx-auto">
                            <td class="number">{{$key+1}}</td><td>ご予約日：{{($item->created_at)->format('Y年m月d日')}}</td>
                            {{-- ここからcontent --}}
                            @foreach($item->contents as $content)
                            <tr><th>メニュー</th><td>{{$content->menu}}</td></tr>
                            <tr><th>支払い予定金額</th><td>{{number_format($content->price)}}円</td></tr>
                            @endforeach
                            {{-- contentここまで --}}
                            {{-- Carbonを利用して文字列を日付型にする --}}
                            <tr><th>施術日</th><td>{{\Carbon\Carbon::parse($item->day)->format('Y年m月d日')}}</td></tr>
                            {{-- 上記と同じ、文字列を時間にする --}}
                            <tr><th>開始時間</th><td>{{\Carbon\Carbon::parse($item->startTime)->format('H時i分')}}</td></tr>
                            <tr>
                                <form action="{{route('dashboard.del', ['reservation_id' => $item->reservation_id])}}" method="post">
                                @csrf
                                @method('delete')
                                <th style="color: red">この内容をキャンセルする</th>
                                <td><button type="submit">はい</button></td>
                            </tr>
                    </table>
                    @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .guest-name {
        margin: 10px 0;
        display: flex;
    }
    .guest-name p {
        margin: 0 10px;
    }
    .mypage-title {
        width: 500px;
        height: 50px;
        line-height: 50px;
        font-size: 25px;
        letter-spacing: 0.12em;
        background-color: black;
        color: #ffffff;
        text-align: center;
    }
    table,tr,th {
        border: 1px solid #595959;
        border-collapse: collapse;
    }
    table {
        margin: 10px 0;
        width: 500px ;
        height: 100px;
    }
    th {
        width: 200px;
    }
    td {
        width: 300px ;
        text-align: center;
    }
    th,td {
        height: 50px;
    }
    .reserve-number {
        text-align: center;
    }
    .number {
        color: #ffffff;
        border: #595959 solid 1px;
        background-color: gray;
    }
    .mypage-search {
        width: 500px;
        margin: 10px 0;
    }
</style>