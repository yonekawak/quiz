<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
    'user_id',
    'quiz_id',
    'choice_number',
    ];
}
