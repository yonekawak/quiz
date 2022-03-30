<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Result extends Model
{
    use SoftDeletes;

     protected $fillable = [
    'user_id',
    'quiz_id',
    'choice_number',
    'correct',
    ];
    
    /**
    *  リレーション 多対１
    */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
     /**
    *  リレーション 多対１
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
