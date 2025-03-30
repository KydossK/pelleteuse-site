<?php

namespace App\Http\Controllers;

use App\Models\Message;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.messages.index', compact('messages'));
    }
}
