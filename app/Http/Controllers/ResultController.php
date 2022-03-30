<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
    *  クイズの回答をresultsテーブルに保存
    *   
    * @param $inputs(ログインしているユーザーの回答データ)
    * @return $result
    */
    public function index(Request $request)
    {
        $inputs = $request['results'];
        
        foreach($inputs as $input){
            $input += ['user_id' => Auth::id()];
            $result = new Result;
            $quiz = new Quiz;
            $answer_number = $quiz->where("id",$input['quiz_id'])->first()->answer_number;
            //正解ならture、不正解ならfalseに振り分ける処理
            if($input['choice_number'] == $answer_number){
                $input += ['correct' => true];
            }else{
                $input += ['correct' => false];
            }
            $result->fill($input)->save();
        }
        return view('results/index')->with(['quizzes' => $quiz->get(),'results' => $inputs]);
    }
}
