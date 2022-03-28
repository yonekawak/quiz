<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Category;
use App\Quiz;

class CategoryController extends Controller
{
    public function index(Category $category, Quiz $quiz)
    {
        return view('categories/index')->with(['quizzes' => $quiz->get(), 'category' => $category->get()]);
    }
    public function show(Quiz $quiz)
    {
        return view('categories/show')->with(['quizzes' => $quiz->get()]);
    }
}
