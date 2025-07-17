<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $mail = new FeedbackReceived([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'message' => $request->input('message'),
        ]);

        Mail::to('murod1bakhramov@gmail.com')->send($mail);

        return back()->with('success', 'Форма успешно отправлена!');
    }
}
