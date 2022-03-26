<?php

namespace App\Http\Controllers;

use App\Category;
use App\Quiz;
use App\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Quiz $quiz, category $category)
    {
        return view('admins/index')->with(['quizzes' => $quiz->getPaginateByLimit(), 'categories' => $category->get()]);
    }
    //間違えた問題クイズ表示
    public function wrongShow(Quiz $quiz)
    {
        $result = new Result;
        return view('wrongs/show')->with(['quizzes' => $result->getWrong()]);
    }
    public function create(Category $category)
    {
        return view('admins/create')->with(['categories' => $category->get()]);
    }
    //クイズ追加
    public function store(Request $request, Quiz $quiz,)
    {
        $input = $request['post'];
        $quiz->fill($input)->save();
        return redirect('/admins');
    }
    public function show(Quiz $quiz)
    {
        return view('admins/show')->with(['quiz' => $quiz]);
    }
    public function edit(Quiz $quiz, Category $category)
    {
        return view('admins/edit')->with(['quiz' => $quiz, 'categories' => $category->get()]);
    }
    public function update(Request $request, Quiz $quiz)
    {
        $input_a = $request['post_a'];
        $quiz->fill($input_a)->save();
        return redirect('/admins');
    }
    public function delete(Quiz $quiz)
    {
        $quiz->delete();
        return redirect('/admins');
    }
}
