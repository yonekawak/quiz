<?php

namespace App\Http\Controllers;

use App\Category;
use App\Quiz;
use App\Wrong;
use App\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //クイズ一覧
    public function index(Quiz $quiz, category $category)
    {
        return view('admins/index')->with(['quizzes' => $quiz->getPaginateByLimit(), 'categories' => $category->get()]);
    }
    //クイズ作成
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
    //クイズ詳細
    public function show(Quiz $quiz)
    {
        return view('admins/show')->with(['quiz' => $quiz]);
    }
    //クイズ編集
    public function edit(Quiz $quiz, Category $category)
    {
        return view('admins/edit')->with(['quiz' => $quiz, 'categories' => $category->get()]);
    }
    //クイズ更新
    public function update(Request $request, Quiz $quiz)
    {
        $input_a = $request['post_a'];
        $quiz->fill($input_a)->save();
        return redirect('/admins');
    }
    //クイズ消去
    public function delete(Quiz $quiz)
    {
        $quiz->delete();
        return redirect('/admins');
    }
    /**
    *  間違えた問題だけのクイズ表示
    *   
    * @param $results(ログインしているユーザーの回答データ)
    * @return $wrongs(間違えたデータ)
    */
    public function wrongShow(Quiz $quiz)
    {
        $result = new Result;
        return view('wrongs/show')->with(['results' => $result->getWrong()]);
    }
}
