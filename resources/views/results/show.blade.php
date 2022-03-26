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
        <p class="card-text">
            <div class="container">
                <div class="row">
                    @foreach ($quizzes as $key => $quiz)
                    <div class="col">
                        <div class="card" style="width: 50rem;">
                            <div class="card-body ry-4">
                                @if($results[$key]["choice_number"] == $quiz->answer_number)
                                    〇 正解
                                    @else
                                    ✕ 不正解
                                @endif
                                <br>
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
                                                @if($results[$key]["choice_number"] == $quiz->answer_number)
                                                <button type="button" class="btn btn-light btn-lg m-3 p-3">
                                                    習得済み
                                                    //correct=tureにする処理を書く
                                                </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </p>
        <a href='/wrongs'>マイページに戻る</a>
    </body>
</html>
@endsection