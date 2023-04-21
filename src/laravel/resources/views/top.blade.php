<html lang="ja">
    <head>
        <link href="/cache/css/base.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <p>{{$user->name}}</p>
        <p>{{request('q')}}</p>
        <p><a href="{{url('/logout')}}">ログアウト</a></p>
    </body>
</html>
