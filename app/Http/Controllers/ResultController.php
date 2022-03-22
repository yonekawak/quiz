<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index(Request $request, Quiz $quiz,)
    {
        $inputs = $request['results'];
        
        foreach($inputs as $input){
            $input ['user_id'] = Auth::id();
            $result = new Result;
            $result->fill($input )->save();
        }
        return view('results/index')->with(['quizzes' => $quiz->get(),'results' => $inputs]);
    }
}
