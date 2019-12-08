<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class BroadcastController extends Controller
{
    public function create()
    {
        return view('broadcast.create');
    }

    public function store(Request $request)
    {

     $users = User::all()->where('role_id', '>', 1)
                               ->where('id', '!=', auth()->user()->id);

        foreach($users as $user) {
            $message = Message::create([
                'subject'=> $request->input('subject'),
                'body'=> $request->input('body'),
                'sender_id' =>  auth()->user()->id,
                'role_id' => $request->input('role_id'),
                'recipient_id' =>$user->id,
                'is_broadcast' => 1,
            ]);

        }

        if ($message) {

            // auth()->user()->notify(new Inbox(['message' => 'You have a message']));
            return redirect()->back()->with('success', 'Broadcast Message Sent successfully');
        }

    }
}
