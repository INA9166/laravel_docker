<html lang="ja">
    <body>
        <p>{{$user->name}}</p>
        <p>{{request('q')}}</p>
        <p><a href="{{url('/logout')}}">ログアウト</a></p>
    </body>
</html>
