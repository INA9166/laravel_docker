<html lang="ja">
    <body>
        <form name="frm" method="post" action="{{url('/loginAuth')}}">
            @csrf
            ID：<input type="text" name="login_id">
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>
