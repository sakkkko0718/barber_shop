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

<div class="container">
    <h2>予約画面</h2>
    <h6>※まだ予約は完了しておりません</h6>
    <br>

 <form action="{{route('reservationsStore')}}" method="post">

{{--    <div class="row">
        <div class="col">ご予約者名</div>
        <div class="col">メニュー</div>
        <div class="col">値段</div>
        <div class="col">目安施術時間</div>
        <div class="col">施術希望日</div>
        <div class="col">開始時間</div>
    </div>
    <div>
        @csrf
        <input type="hidden" name="content_id" value="{{$form->content_id}}">
        @error('day')
            <span style="color: red">施術希望日は明日以降の日付をお選びください</span>
        @enderror
        <div class="row">
            <div class="col">{{Auth::user()->name}}</div>
            <div class="col">{{$form->menu}}</div>
            <div class="col">{{number_format($form->price)}}円</div>
            <div class="col">{{$form->time}}</div>
            <div class="col"><input type="date" name="day" value="{{$form->day}}"></div>
            <div class="col">
                <input type="time" step="1800" list="time-list" min="10:00" max="15:00" name="startTime" value="{{$form->startTime}}">
                    <datalist id="time-list">
                        <option value="10:00"></option>
                        <option value="10:30"></option>
                        <option value="11:00"></option>
                        <option value="11:30"></option>
                        <option value="12:00"></option>
                        <option value="12:30"></option>
                        <option value="13:00"></option>
                        <option value="13:30"></option>
                        <option value="14:00"></option>
                        <option value="14:30"></option>
                        <option value="15:00"></option>
                    </datalist>
            </div>
        </div>
    </div> --}}


<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th>ご予約者名</th>
            <th>メニュー</th>
            <th>値段</th>
            <th>目安施術時間</th>
            <th>施術希望日</th>
            <th>開始時間</th>
        </tr>
        <tr>
            {{-- 買い物かごに１つしか入れない場合の書き方 --}}
            {{-- 取得したデータ（id）をformにぶち込む作戦 --}}
            @csrf
            <input type="hidden" name="content_id" value="{{$form->content_id}}">
            @error('day')
                <span style="color: red">施術希望日は明日以降の日付をお選びください。</span>
            @enderror
                <td>{{Auth::user()->name}}</td>
                <td>{{$form->menu}}</td>
                <td>{{number_format($form->price)}}円</td>
                <td>{{$form->time}}</td>
                <td><input type="date" name="day" value="{{$form->day}}"></td>
                <td>
                    <input type="time" step="1800" list="time-list" min="10:00" max="15:00" name="startTime" value="{{$form->startTime}}">
                    <datalist id="time-list">
                        <option value="10:00"></option>
                        <option value="10:30"></option>
                        <option value="11:00"></option>
                        <option value="11:30"></option>
                        <option value="12:00"></option>
                        <option value="12:30"></option>
                        <option value="13:00"></option>
                        <option value="13:30"></option>
                        <option value="14:00"></option>
                        <option value="14:30"></option>
                        <option value="15:00"></option>
                    </datalist>
                </td>
        </tr>
    </table>
</div>
    <div class="next-item">
        <p>この内容で予約を完了しますか？</p>
        <input class="btn btn-secondary btn active" type="submit" value="はい">
        <a href="{{route('index')}}" class="btn btn-secondary btn active" role="button" aria-pressed="true">いいえ</a>
    </div>
</form>
</div>
@endsection

<style>

</style>