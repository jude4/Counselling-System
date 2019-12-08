<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\Inbox;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Notifiable;

    protected $fillable = [
        'id',
        'sender_id',
        'recipient_id',
        'subject',
        'body',
        'role_id',
        'is_broadcast'
    ];

    // public function users()
    // {
    //     return $this->belongsTo('App\User');
    // }

    public function users()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }


}
