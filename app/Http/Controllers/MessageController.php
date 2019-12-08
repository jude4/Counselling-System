<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Notifications\Inbox;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function counsellorForm()
    {
        if (auth()->user()->role_id == 2)
        {
            $user = auth()->user();
            // $users = $user->messages->where(['recipientid_', '=', $user->id ]);

            // $user = DB::table('users')
            //         ->join('messages', 'users.id', 'messages.sender_id')
            //         ->groupBy('sender_id')
            //         ->get();

            //     dd($user);
            // dd($message = $users);


            $msgs = $user->messages()->orderBy('created_at', 'desc')->get();
            //         ->orderBy('created_at', 'desc')
            //         ->get(['sender_id', 'body', 'created_at'])
            //         ->groupBy('sender_id');
            // $result = new \Illuminate\Database\Eloquent\Collection();

            return view('chats.counsellor', ['msgs' => $msgs]);
        }
        // return redirect('dashboard')->withErrors('errors', 'Unautorize page');
    }

    public function studentForm()
    {
        if (auth()->user()->role_id == 3)
        {
            $user = auth()->user();
            $msgs = $user->messages()->orderBy('created_at', 'desc')->get();
            return view('chats.student', ['msgs' => $msgs]);
        }

        $users = User::all();
        return view('chats.student', ['users' => $users]);
    }

    public function lecturerForm()
    {
        if (auth()->user()->role_id == 4)
        {
            $user = auth()->user();

            $msgs = $user->messages()->orderBy('created_at', 'desc')->get();
            $users = User::all();
            return view('chats.lecturer', ['msgs' => $msgs, 'users' => $users]);
        }

        $users = User::all();
        return view('chats.lecturer', ['users' => $users]);
    }


    public function speaktolect()
    {
        $role_id = 4;
        $users = User::all();

      return view('chats.compose', ['users' => $users, 'role_id' => $role_id]);
    }

    public function speaktocon()
    {
        $role_id = 2;
        $users = User::all();

        $user = auth()->user();
        $msgs = $user->messages;

            $msgs = count($msgs);
      return view('chats.compose', ['users' => $users, 'role_id' => $role_id, 'msgs' => $msgs]);
    }


    public function inbox()
    {
        $user = auth()->user();
        $msgs = $user->messages->orderBy('created_at', 'desc')->get();
        return view('chats.inbox', ['msgs' => $msgs]);
    }

    public function reply(Request $request, $id)
    {
        $user = User::find($id);

        return view('chats.reply', ['user'=>$user]);
    }

    public function profile(Request $request, $id, $sender_id)
    {
        $user =  User::find($sender_id);
        $auth_user = auth()->user();
        $msg = $auth_user->messages()->where('id', '=', $id)->first();
        $createdAt = Carbon::parse($msg['created_at']);
        return view('chats.profile', ['user' => $user, 'msg' => $msg, 'createdAt' => $createdAt]);
    }

    public function index()
    {

        return view('chats.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            $message = Message::create([
                'subject'=> $request->input('subject'),
                'body'=> $request->input('body'),
                'sender_id' =>  auth()->user()->id,
                'role_id' => $request->input('role_id'),
                'recipient_id' => $request->input('recipient_id'),
            ]);

            if ($message) {

                // auth()->user()->notify(new Inbox(['message' => 'You have a message']));
                return redirect()->back()->with('success', 'Message Sent successfully');
            }


        // return back()->withInput()->with('errors', 'Error Sending Message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
