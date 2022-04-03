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
        <h6>この場所には&#10060;だった問題だけが表示されます。
        <br>Goボタンから1度間違えた問題だけのクイズを開始でき、正解した問題はマイページから自動的に消去されます。</h6>
        <p class="card-text">
            <div class="container">
                <div class="row">
                    <div class="col">
                    @foreach ($quizzes as $quiz)
                        <div class="card" style="width: 50rem;">
                            <div class="card-body ry-4">
                                <h6 class="card-title">{{ $quiz->quiz_id }}, 間違えた問題:{{ $quiz->quiz->question }}</h6>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h6>選択肢1:{{ $quiz->quiz->choice1 }}</h6>
                                                <h6>選択肢2:{{ $quiz->quiz->choice2 }}</h6>
                                                <h6>選択肢3:{{ $quiz->quiz->choice3 }}</h6>
                                                <h6>選択肢4:{{ $quiz->quiz->choice4 }}</h6>
                                            </div>
                                            <div class="col">
                                                答えを確認する：<input type="checkbox">
                                                <p><u>選択肢{{ $quiz->quiz->answer_number }}</u></p>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="col">
                        <h4>クイズを開始する
                            <button type="button" class="btn btn-warning btn-lg m-3 p-3" onclick="location.href='/wrongs/show'">Go</button>
                        </h4>
                    </div>
                </div>
            </div>
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection