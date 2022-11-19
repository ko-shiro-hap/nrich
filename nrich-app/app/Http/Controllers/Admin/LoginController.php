<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 追記
use Illuminate\Validation\ValidationException;
use Auth;

// 追記
use App\Models\Administrator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['user_id', 'password']);

        if (Auth::guard('administrators')->attempt($credentials)) {
            // ログインしたら管理画面トップにリダイレクト
            return redirect()->route('admin.index')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }
        // dd(Auth::guard('administrators')->attempt($credentials));
        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログアウトしたらログインフォームにリダイレクト
        return redirect()->route('admin.login')->with([
            'logout_msg' => 'ログアウトしました',
        ]);
    }
}