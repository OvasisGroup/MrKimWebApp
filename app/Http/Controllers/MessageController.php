<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->id()->get());
        // $users = User::all();
        return view('message.index', compact('users'));
    }

    public function show(User $user)
    {
        $messages = Message::where(function ($query) use ($user){
            $query->where('sender_id', auth()->id())
                  ->Where('receiver_id', $user->id);
        })->orWhere(function ($query) use ($user){
            $query->where('sender_id', $user->id)
                  ->Where('receiver_id', auth()->id());
        })->orderBy('created_at', 'desc')->get();
        return view('message.show', compact('messages'));
    }

    public function store(Request $request)
    {
        $user = User::find(auth()->id());
        $message = new Message();
        $message->sender_id = auth()->id();
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();
        if ($request->receiver_id == auth()->id()) {
            $user->receivedMessages()->save($message);
        } else {
            $user->sentMessages()->save($message);
        }
    }
}
