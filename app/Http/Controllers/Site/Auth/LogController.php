<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogForm()
    {
        if (Auth::check()) {
            return redirect()->route('site.profile');
        }

        return view("site.login");
    }

    public function log(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request->login === 'admin' && $request->password === 'admin') {
            return redirect()->route('main.index');
        }

        $user = User::where('login', $request->login)
            ->orWhere('email', $request->login)
            ->first();

        if (!$user || Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['login' => 'Неверные учетные данные'])->withInput();
        }

        Auth::login($user);

        Cookie::queue('user_id', $user->id, 60 * 24);
        Cookie::queue('user_name', $user->name, 60 * 24);

        return redirect()->route('site.index');
    }

    public function logout()
    {
        Auth::logout();

        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('user_name'));

        Session::flush();
        Cache::flush();

        return redirect()->route('site.login');
    }
}

