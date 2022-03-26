<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Study;
use App\Quiz;

class StudyController extends Controller
{
    public function show(Result $result, Quiz $quiz)
    {
        $study = new Study;
        
        return view('studies/show')->with(['quizzes' => $study->getData()]);
    }
}
