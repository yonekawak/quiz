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
        <h1>クイズ一覧画面</h1>
        [<a href='/admins/create'>クイズを追加する</a>]
        @foreach ($quizzes as $key => $quiz)
            <div class='quizzes'>
                <a href="/admins/quizzes/{{ $quiz->id }}">問題文</a>:{{ $quiz->question }}
                <br>
                答えの番号:<a>{{ $quiz->answer_number }}</a>
                <br>
                １:<a>{{ $quiz->choice1 }}</a>
                <br>
                ２:<a>{{ $quiz->choice2 }}</a>
                <br>
                ３:<a>{{ $quiz->choice3 }}</a>
                <br>
                ４:<a>{{ $quiz->choice4 }}</a>
                <br>
                カテゴリー:<a>{{ $quiz->category->name }}</a>
            </div>
        @endforeach
        
        <div class='paginate'>
            {{ $quizzes->links() }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection