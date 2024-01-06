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
                <td>予約NO,</td>
                <td>ゲストID</td>
                <td>施術日</td>
            </tr>
            @foreach ($reservations as $reserve)
            <tr>
                <td>{{$reserve -> reservation_id}}</td>
                <td>{{$reserve -> guest_id}}</td>
                <td>{{$reserve -> day}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>