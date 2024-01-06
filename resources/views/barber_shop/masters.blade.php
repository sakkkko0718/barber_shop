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
                <td></td>
                <td>メニュー</td>
            </tr>
            @foreach ($masters as $master)
            <tr>
                <td>{{$master -> master_id}}</td>
                <td>{{$master -> type}}</td>
                <td><a href=""><img src="{{asset('image/master'.$master->master_id.'.png')}}" alt="" width="100px" height="100px"></a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>