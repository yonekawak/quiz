@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>quizzez</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>詳細画面</h1>
        <h6 class="title">
            <a>問題文</a>：{{ $quiz->question }}
        </h6>
        <div class="content">
            <div class="content__quiz">
            １:{{ $quiz->choice1 }}
            <br>
            ２:{{ $quiz->choice2 }}
            <br>
            ３:{{ $quiz->choice3 }}
            <br>
            ４:{{ $quiz->choice4 }}
            <br>
            答えの番号:{{ $quiz->answer_number }}  
            </div>
        </div>
        <p class="edit">[<a href="/admins/quizzes/{{ $quiz->id }}/edit">編集する</a>]</p>
        <div class="footer">
            <a href="/admins">戻る</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection