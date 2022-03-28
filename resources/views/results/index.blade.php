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
        <p class="card-text">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 50rem;">
                            <div class="card-body ry-4">
                            @foreach ($quizzes as $key => $quiz)
                                @if($results[$key]["choice_number"] == $quiz->answer_number)
                                    〇
                                    @else
                                    ✕ 
                                @endif
                                <a>問題文：{{ $quiz->question }}</a>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h6>選択肢1：{{ $quiz->choice1 }}</h6>
                                                <h6>選択肢2：{{ $quiz->choice2 }}</h6>
                                                <h6>選択肢3：{{ $quiz->choice3 }}</h6>
                                                <h6>選択肢4：{{ $quiz->choice4 }}</h6>
                                            </div>
                                            <div class="col">
                                                <h6>あなたの回答番号：{{ $results[$key]["choice_number"] }}</h6>
                                                <h6 class='answer_number'>正解番号：{{ $quiz->answer_number }}</h6>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            @endforeach
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <a href='/categories'>トップ画面に戻る</a>
        <a href='/wrongs'>学習画面に行く</a>
    </body>
</html>
@endsection