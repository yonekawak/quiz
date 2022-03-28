@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>quizzez</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>編集画面</h1>
        <div class="content">
        <form action="/admins/quizzes/{{ $quiz->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__question'>
                <h2>問題文</h2>
                <textarea id='question' name='post_a[question]' value="{{ $quiz->question }}"></textarea>
            </div>
            <div class='content__choice1'>
                <h2>１</h2>
                <input type='text' name='post_a[choice1]' value="{{ $quiz->choice1 }}">
            </div>
            <div class='content__choice2'>
                <h2>２</h2>
                <input type='text' name='post_a[choice2]' value="{{ $quiz->choice2 }}">
            </div>
            <div class='content__choice3'>
                <h2>３</h2>
                <input type='text' name='post_a[choice3]' value="{{ $quiz->choice3 }}">
            </div>
            <div class='content__choice4'>
                <h2>４</h2>
                <input type='text' name='post_a[choice4]' value="{{ $quiz->choice4 }}">
            </div>
            <div>
                <h2>答えの番号</h2>
                <input type='number' name='post_a[answer_number]'  value="{{ $quiz->answer_number }}">
            </div>
            <div>
                <h2>カテゴリー</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection