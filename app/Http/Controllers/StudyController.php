<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Study;
use App\Quiz;

class StudyController extends Controller
{
    public function index(Result $result, Quiz $quiz)
    {
        $study = new Study;
        
        return view('studies/index')->with(['quizzes' => $study->getData()]);
    }
}
