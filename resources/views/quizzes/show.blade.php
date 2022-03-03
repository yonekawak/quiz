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
        <h1>回答画面</h1>
        @foreach ($quizzes as $key => $quiz)
            {{ $results[$key] }}
            @if($results[$key] == $quiz->answer_number)
                正解
                @else
                不正解
            @endif
            <h2 class='answer_number'>{{ $quiz->answer_number }}</h2>
        @endforeach
        <a href='/categories'>トップ画面に戻る</a>
        <a href=''></a>
    </body>
</html>
@endsection