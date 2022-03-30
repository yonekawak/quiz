<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Result;
use App\Wrong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WrongController extends Controller
{
    public function index(Quiz $quiz)
    {
        $wrong = new Wrong;
        return view('wrongs/index')->with(['quizzes' => $wrong->get()]);
    }
    /**
    *  マイページの回答をwrongsテーブルに保存
    *   
    * @param $inputs(ログインしているユーザーの回答データ)
    * @return $wrong
    */
    public function show(Request $request)
    {
        $inputs = $request['wrongs'];
        
        foreach($inputs as $input){
            $input += ['user_id' => Auth::id()];
            $wrong = new Wrong;
            $quiz = new Quiz;
            $answer_number = $quiz->where("id",$input['quiz_id'])->first()->answer_number;
            if($input['choice_number'] == $answer_number){
                $input += ['correct' => true];
            }else{
                $input += ['correct' => false];
            }
            $wrong->fill($input)->save();
        }
        return view('results/show')->with(['quizzes' => $quiz->get(),'wrongs' => $inputs]);
    }
    //クイズ消去
    public function delete(Quiz $quiz)
    {
        
        $quiz->users()->detach(Auth::id());
        return redirect('/wrongs');
    }
    
    
    /**
    *  間違えた問題だけのクイズ表示
    *   
    * @param $results(ログインしているユーザーの回答データ)
    * @return $wrongs(間違えたデータ)
    */
    public function wrongShow(Quiz $quiz)
    {
        $wrong = new Wrong;
        return view('wrongs/show')->with(['quizzes' => $wrong->get()]);
    }
    /**
    *  マイページで正解した問題をtureに変える処理
    *   
    * @param $results(ログインしているユーザーの回答データ)
    * @return $wrongs(間違えたデータ)
    */
    public function update(PostRequest $request, Post $post)
    {
        $input_c = $request['post_c'];
        $result->fill($input_c)->save();
        return redirect('/wrongs');
    }
}
