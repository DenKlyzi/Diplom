<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Валидация входных данных
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'text' => 'required|string',
        ]);

        try {

            Mail::to('vortex40shop@yandex.ru')->send(new ContactFormMail($validated));
            return back()->with('message', 'Ваше сообщение отправлено!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Ошибка при отправке сообщения: ' . $e->getMessage()]);
        }
    }
}
