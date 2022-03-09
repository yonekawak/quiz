<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Quiz;

class AdminController extends Controller
{
    public function index(Quiz $quiz)
    {
        return view('admins/index')->with(['quizzes' => $quiz->getPaginateByLimit()]);
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
    public function show(Quiz $quiz)
    {
        return view('admins/show')->with(['quiz' => $quiz]);
    }
    public function edit(Quiz $quiz)
    {
        return view('admins/edit')->with(['quiz' => $quiz]);
    }
    public function update(Request $request, Quiz $quiz)
    {
        $input_a = $request['post_a'];
        $quiz->fill($input_a)->save();
        return redirect('/admins');
    }
}
