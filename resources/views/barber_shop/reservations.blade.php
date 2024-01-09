<html>
    {{-- 仮設置 --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td>予約ID</td>
                <td>ゲストID</td>
                <td>お名前</td>
                <td>メニュー</td>
                <td>値段</td>
                <td>目安施術時間</td>
                {{-- <td>施術日</td> --}}
            </tr>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{$reservation->reservation_id}}</td>
                <td>{{$reservation->guest_id}}</td>
                <td>{{$reservation->guest->name}}</td>
                <td>{{$reservation->content->menu}}</td>
                <td>{{$reservation->content->price}}円</td>
                <td>{{$reservation->content->time}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>