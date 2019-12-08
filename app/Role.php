<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    // public function messages()
    // {
    //     return $this->morphMany('App\Message', 'messageable', 'to_id', 'from_id');
    // }

}
