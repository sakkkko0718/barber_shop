@extends('layouts.adminbase')

@section('content')
<form action="/guest/add" method="post">
        <table>
            @csrf
            <tr><th>お名前：</th><td><input type="text" name="name"></td></tr>
            <tr><th>ご住所：</th><td><input type="text" name="address"></td></tr>
            <tr><th>メールアドレス：</th><td><input type="email" name="email"></td></tr>
            <tr><th>電話番号：</th><td><input type="tel" name="tel"></td></tr>
        </table>
        
        <input type="submit" value="登録" class="btn btn-secondary btn active">
</form>
@endsection

<style>
    .menu th {
        font-size: 18px;
        height: 5vh;
    }
</style>