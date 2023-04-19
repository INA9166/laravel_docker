<html lang="ja">
    <head>
        <link href="/css/base.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form name="frm" method="post" action="{{url('/loginAuth')}}">
            @csrf
            ID：<input type="text" name="login_id">
            <input type="submit" value="ログイン">
        </form>
        <img src="/images/neko.jpeg">
    </body>
</html>
