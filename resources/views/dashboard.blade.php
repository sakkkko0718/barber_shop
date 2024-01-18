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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- 予約した履歴が見られる --}}
                    <table>
                        {{-- @foreach ($datas as $data)
                        <tr><th>施術日：</th><td>{{$data->day}}</td></tr>
                        <tr><th>開始時間：</th><td>{{$data->time}}</td></tr>
                        <tr><th>予約内容：</th><td>{{$data->menu}}</td></tr>
                        @endforeach --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .mypage-button {
        margin-top: 20px;
    }
    .guest-name {
        margin: 10px 0;
        display: flex;
    }
    .guest-name p {
        margin: 0 10px;
    }
</style>