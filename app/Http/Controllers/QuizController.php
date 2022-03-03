<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(Request $request, Quiz $quiz)
    {
        $results = $request['results'];
        return view('quizzes/show',)->with(['quizzes' => $quiz->get(),'results' => $results]);
    }
}
