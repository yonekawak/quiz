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
    
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function getWrong()
    {
        $user = Auth::user();
        //ログインしているユーザーのresultsデータを持ってくる
        $results = $user->results;
        //correctカラムがfalseのデータだけgetする
        $wrongs = Result::where("correct",0)->groupBy('quiz_id')->get();
        return $wrongs;
    }
}
