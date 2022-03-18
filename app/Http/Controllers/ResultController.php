<?php

namespace App\Http\Controllers;
use App\Quiz;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(Request $request, Quiz $quiz)
    {
        $input = $request['results'];
        $result = new Result;
        $result->user_id = 1;
        
        $result->quiz_id = 1;
        $result->choice_number = $input[0];
        $result->save();
        
        return view('results/index')->with(['quizzes' => $quiz->get(),'results' => $input]);
    }
    //クイズ回答後の正誤リザルトを表示する
    //public function show(Request $request, Quiz $quiz)
    //{
        //dd($request);
        //$results = $request['results'];
        //return view('results/show')->with(['quizzes' => $quiz->get(),'results' => $results]);
    //}
    //ユーザーの回答を保存する
    //public function store(Request $request, Quiz $quiz)
    //{
        //$input = $request['results'];
        //$quiz->fill($input)->save();
        //return redirect('/results');
    //}
    
}
