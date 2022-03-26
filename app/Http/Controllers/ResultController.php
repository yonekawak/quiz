<?php

namespace App\Http\Controllers;
use App\Quiz;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
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
                //correctカラムにtureを入れる
                $input += ['correct' => true];
            }else{
                //correctカラムにfalseを入れる
                $input += ['correct' => false];
            }
            $result->fill($input)->save();
        }
        return view('results/index')->with(['quizzes' => $quiz->get(),'results' => $inputs]);
    }
    
    public function wrongIndex(Quiz $quiz)
    {
        $result = new Result;
        return view('wrongs/index')->with(['quizzes' => $result->getWrong()]);
    }
    
    public function show(Request $request)
    {
        $inputs = $request['wrongs'];
        
        foreach($inputs as $input){
            $input += ['user_id' => Auth::id()];
            $result = new Result;
            $quiz = new Quiz;
            $answer_number = $quiz->where("id",$input['quiz_id'])->first()->answer_number;
            if($input['choice_number'] == $answer_number){
                $input += ['correct' => true];
            }else{
                $input += ['correct' => false];
            }
            $result->fill($input)->save();
        }
        return view('results/show')->with(['quizzes' => $quiz->get(),'results' => $inputs]);
    }
}
