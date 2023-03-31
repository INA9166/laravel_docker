<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

use App\Models\Models\ {
    Users,
};

class TestController extends Controller
{
    public function show(Request $request)
    {
        echo '<html lang="ja">';

        $user = Users::getOne('login1');
        echo $user->name.'<br>';

        //$request->session()->put('key', '名前2');
        echo $request->session()->get('key').'<br>';

        //Redis::set('name', 'John');
        $name = Redis::get('name');
        echo phpinfo().'<br>';

        echo '</html>';
    }
}
