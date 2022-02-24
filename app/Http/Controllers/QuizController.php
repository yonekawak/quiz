<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function top(Quiz $quiz)
    {
        return view('quizzes/top')->with(['quiz' => $quiz]);
    }
    public function show(Quiz $quiz)
    {
        return view('quizzes/show')->with(['quiz' => $quiz]);
    }
}
