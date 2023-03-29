<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

use App\Models\Models\ {
    Users,
};

class TestController extends Controller
{
    public function show(Request $request)
    {
        $user = Users::getOne('login1');
        echo $user->name.'<br>';

        //$request->session()->put('key', '名前1');
        echo $request->session()->get('key',);

        Log::debug('AAA');
    }
}
