<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Category;
use App\Quiz;

class CategoryController extends Controller
{
    public function index(Quiz $quiz, category $category)
    {
        return view('categories/index')->with(['quizzes' => $quiz->get()]);
    }
    public function show(Quiz $quiz)
    {
        return view('categories/show')->with(['quizzes' => $quiz->get()]);
    }
}
