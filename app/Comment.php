<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'id',
        'user_id',
        'body',
        'commentable_type',
        'commentable_id',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

}
