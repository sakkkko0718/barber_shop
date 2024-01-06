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
                <td>ゲストID</td>
                <td>お名前</td>
                <td>ご住所</td>
                <td>メール</td>
                <td>お電話番号</td>
            </tr>
            @foreach ($guests as $guest)
            <tr>
                <td>{{$guest -> guest_id}}</td>
                <td>{{$guest -> name}}</td>
                <td>{{$guest -> address}}</td>
                <td>{{$guest -> email}}</td>
                <td>{{$guest -> tel}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>