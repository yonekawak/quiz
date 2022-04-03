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
    /**
    *  間違った問題だけをresultsテーブルから取得
    *   
    * @param $results(ログインしているユーザーの回答データ)
    * @return $wrongs(間違えたデータ)
    */
    public function getWrong()
    {
        $user = Auth::user();
        //userの回答データを持ってくる
        $results = $user->results;
        //correctカラムがfalseのデータだけgetする
        $wrongs = Result::where("correct",0)->groupBy('quiz_id')->get();
        return $wrongs;
    }
}
