<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
    
        if (User ::where('login', $data['login'])->exists()) {
            return redirect()->back()->withErrors(['login' => 'Этот логин уже используется.'])->withInput();
        }
    
        User::firstOrCreate([
            'email' => $data['email'],
        ], $data);
    
        return redirect()->route('users.index');
    }
}
