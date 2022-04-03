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
                    @foreach ($results as $key => $result)
                    <div class="col">
                        <div class="card" style="width: 50rem;">
                            <div class="card-body ry-4">
                                @if($inputs[$key]["choice_number"] == $result->quiz->answer_number)
                                    <u class="text-primary">&#9711;　正解</u><br>
                                    @else
                                    <u class="text-danger">&#10060; 不正解</u><br>
                                @endif
                                <a>{{ $result->quiz->id }}, 問題文：{{ $result->quiz->question }}</a>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h6>選択肢1：{{ $result->quiz->choice1 }}</h6>
                                                <h6>選択肢2：{{ $result->quiz->choice2 }}</h6>
                                                <h6>選択肢3：{{ $result->quiz->choice3 }}</h6>
                                                <h6>選択肢4：{{ $result->quiz->choice4 }}</h6>
                                            </div>
                                            <div class="col">
                                                <h6>あなたの回答番号：{{ $inputs[$key]["choice_number"] }}</h6>
                                                <h6 class='answer_number'>正解番号：{{ $result->quiz->answer_number }}</h6>
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
        <button type="button" class="btn btn-warning btn-lg m-3 p-3"  onclick="location.href='/wrongs'">マイページに戻る</button><a href='/wrongs'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection