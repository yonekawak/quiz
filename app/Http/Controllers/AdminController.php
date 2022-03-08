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
    public function create()
    {
        return view('admins/create');
    }
    public function store(Request $request, Quiz $quiz)
    {
        
        $input = $request['post'];
        $quiz->fill($input)->save();
        return redirect('/admins');
    }
}
