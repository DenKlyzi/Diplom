<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'surname' => ['required', 'string', 'max:255'],
                'patronymic' => ['required', 'string', 'max:255'],
                'login' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
            ]);

            $hashedPassword = Hash::make($validatedData['password']);

            User::create([
                'name' => $validatedData['name'],
                'surname' => $validatedData['surname'],
                'login' => $validatedData['login'],
                'email' => $validatedData['email'],
                'password' => $hashedPassword,
            ]);

            return redirect()->route('users.index')->with('success', 'Пользователь успешно создан');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect()->back()->with('error', 'Произошла ошибка при создании пользователя.');
        }
    }
}
