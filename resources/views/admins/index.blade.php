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
        <h1>管理者画面</h1>
        @foreach ($quizzes as $key => $quiz)
            <div class='quizzes'>
                <h3>{{ $quiz->question }}</h3>
                <h3>{{ $quiz->answer_number }}</h3>
                <h3>{{ $quiz->choice1 }}</h3>
                <h3>{{ $quiz->choice2 }}</h3>
                <h3>{{ $quiz->choice3 }}</h3>
                <h3>{{ $quiz->choice4 }}</h3>
                <h3>{{ $quiz->category_id }}</h3>
            </div>
        @endforeach
        [<a href='/admins/create'>create</a>]
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection