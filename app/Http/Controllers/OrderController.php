<?php

namespace App\Http\Controllers;

use App\Mail\OrderReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

        $mail = new OrderReceived([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
        ]);

        Mail::to('murod1bakhramov@gmail.com')->send($mail);

        return back()->with('success', 'Ваш заказ успешно отправлен!');
    }
}
