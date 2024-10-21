<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'contents' => ['required', 'string', 'max:2000'],
        ]);


        $chat = Chat::create([
            'contents' => $request->contents,
            'channel_id' => $request->channel,
            'user_id' => $request->user,
        ]);

        if ($chat) {
            return redirect('/public');
        }
    }
}
