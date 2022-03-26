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
        <h4>マイページ</h4>
        <p class="card-text">
            <div class="container">
                <div class="row">
                    <div class="col">
                    @foreach ($quizzes as $quiz )
                        <div class="card" style="width: 50rem;">
                            <div class="card-body ry-4">
                                <h5 class="card-title">{{ $quiz->quiz_id }}, 間違えた問題:{{ $quiz->quiz->question }}</h5>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h5>選択肢1:{{ $quiz->quiz->choice1 }}</h5>
                                                <h5>選択肢2:{{ $quiz->quiz->choice2 }}</h5>
                                                <h5>選択肢3:{{ $quiz->quiz->choice3 }}</h5>
                                                <h5>選択肢4:{{ $quiz->quiz->choice4 }}</h5>
                                            </div>
                                            <div class="col">
                                                <br>
                                                <br>
                                                <br>
                                                <h5><u>答え:選択肢{{ $quiz->quiz->answer_number }}</u></h5>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="col">
                        <h4>間違えた問題だけのクイズ</h4>
                        <button type="button" class="btn btn-dark btn-lg m-3 p-3">
                            <a href='/wrongs/show' class="text-decoration-none">Go</a> 
                        </button>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                        </script>
                    </div>
                </div>
            </div>
        </p>
    </body>
</html>
@endsection