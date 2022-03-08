<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Quiz;

class AdminController extends Controller
{
    public function index(Quiz $quiz)
    {
        return view('admins/index')->with(['quizzes' =>  $quiz->get()]);
    }
}
