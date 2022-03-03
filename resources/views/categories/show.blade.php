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
        <h1>クイズ画面</h1>
        <form  action="/quizzes/answer" method="POST">
            @csrf
            @foreach ($quizzes as $key => $quiz)
                <div class='quizzes'>
                    <div class='quiz'>
                        <h2 class='question'>{{ $quiz->question }}</h2>
                        <select　name="results[{{ $key }}]" size="4">
                            <option value="1">{{ $quiz->choice1 }}</option>
                            <option value="2">{{ $quiz->choice2 }}</option>
                            <option value="3">{{ $quiz->choice3 }}</option>
                            <option value="4">{{ $quiz->choice4 }}</option>
                        </select>
                    </div>
                </div>
            @endforeach
            <div>
                <a href='/categories'>トップ画面に戻る</a>
                <input type="submit" value="回答する"/>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection