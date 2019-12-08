<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    public $table = 'faq';

    protected $fillable = [
        'question',
        'answer',
    ];
}
