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

    public function destroy(\App\Models\Message $message)
{
    $message->delete();

    return redirect()->route('admin.messages.index')
        ->with('success', 'Message supprimé.');
}

}
