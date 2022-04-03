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
        <div class="container text-center">
            <form  action="/results" method="POST">
                <div class="text-left">
                @csrf
                @foreach ($quizzes as $key => $quiz)
                    <div class='quizzes'>
                        <div class='quiz'>
                            <input value="{{ $quiz->id }}" name="results[{{ $key }}][quiz_id]" type="hidden">
                            <h5 class='question'>{{ $quiz->id }}, {{ $quiz->question }}</h5>
                            <select name="results[{{ $key }}][choice_number]" size="4" style="width: 14rem;" class="border border-primary">
                                <option value="1">{{ $quiz->choice1 }}</option>
                                <option value="2">{{ $quiz->choice2 }}</option>
                                <option value="3">{{ $quiz->choice3 }}</option>
                                <option value="4">{{ $quiz->choice4 }}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                @endforeach
                </div>
                <div>
                    <button type="button" class="btn btn-warning btn-lg m-3 p-3" onclick="location.href='/categories'">トップ画面に戻る</button>
                    <input type="submit" class="btn btn-danger btn-lg m-3 p-3" value="回答する"/>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection