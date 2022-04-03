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
            $result->updateOrCreate($input);
        }
        return view('results/index')->with(['quizzes' => $quiz->get(),'results' => $inputs]);
    }
    /**
    *  resultsテーブルのfalseのみを表示
    *   
    * @param $inputs(ログインしているユーザーの回答データ)
    * @return $wrong
    */
    public function wrongIndex(Quiz $quiz)
    {
        $result = new Result;
        return view('wrongs/index')->with(['quizzes' => $result->getWrong()]);
    }
    /**
    *  正解した問題を
    *   
    * @param $inputs(ログインしているユーザーの回答データ)
    * @return $wrong
    */
    public function update(Request $request,Result $result)
    {
        $inputs = $request['wrongs'];
        $results = $result->getWrong();
        foreach($inputs as $input){
            
            $result = $result->where("user_id",Auth::id())->where("quiz_id",$input['quiz_id'])->first();
            $quiz = new Quiz;
            $answer_number = $quiz->where("id",$input['quiz_id'])->first()->answer_number;
            if($input['choice_number'] == $answer_number){
                $input += ['correct' => true];
            }else{
                $input += ['correct' => false];
            }
            $result->fill($input)->save();
        }
        return view('results/show')->with(['results' => $results,'inputs' => $inputs]);
    }
}
