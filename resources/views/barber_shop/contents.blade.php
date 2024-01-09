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
        <div>以下よりお選びください</div>
        <table>
            <tr>
                <td></td>
                <td>メニュー</td>
                <td>値段</td>
                <td>目安施術時間</td>
            </tr>
            @foreach ($contents as $content)
            @csrf
            <tr>
                <td>{{$content->content_id}}</td>
                <td>{{$content->menu}}</td>
                <td>{{$content->price}}円</td>
                <td>{{$content->time}}</td>
                {{-- <td><input type="submit" value="空き日時を確認"></td> --}}
                <td><input type="submit" value="追加"></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>