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
        @foreach ($quizzes as $key => $quiz)
            <h3>{{ $quiz->question }}</h3>
            あなたの回答{{ $results[$key] }}
            @if($results[$key] == $quiz->answer_number)
                〇
                @else
                ✕
            @endif
            <h2 class='answer_number'>{{ $quiz->answer_number }}</h2>
            <h5>回答解説</h5>
        @endforeach
        <a href='/categories'>トップ画面に戻る</a>
        <a href=''></a>
    </body>
</html>
@endsection