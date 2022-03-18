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
            @if($results[$key] == $quiz->answer_number)
                〇
                @else
                ✕ 
            @endif
            <br>
            {{ $quiz->question }}
            <br>
            あなたの回答番号：{{ $results[$key] }}
            <h6 class='answer_number'>正解番号：{{ $quiz->answer_number }}</h6>
            <br>
        @endforeach
        <a href='/categories'>トップ画面に戻る</a>
        <a href=''></a>
    </body>
</html>
@endsection