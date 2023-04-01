<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\ {
    User,
};

class TestController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function loginAuth(Request $request)
    {
        $user = User::getOne($request->login_id);
        if (empty($user)) return redirect('/');

        Auth::guard('web')->loginUsingId($user->id, false);

        return redirect('/top?q=A');
    }

    public function top(Request $request)
    {
        $user = Auth::guard('web')->user();

        return view('top', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        return redirect('/');
    }
}
