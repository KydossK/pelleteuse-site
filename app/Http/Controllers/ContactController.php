<?php

namespace App\Http\Controllers;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use Illuminate\Http\Request;
use App\Models\Message;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        Message::create($validated);

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
