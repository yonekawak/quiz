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
        <div class="container text-center">
        <form  action="/results/wrong" method="POST">
            <div class="text-left">
            @csrf
            @foreach ($quizzes as $key =>$quiz)
            <div class='quizzes'>
                    <div class='quiz'>
                        <input value="{{ $quiz->quiz->id }}" name="wrongs[{{ $key }}][quiz_id]" type="hidden">
                            <h5 class='question'>{{ $quiz->quiz->question }}</h5>
                        <select name="wrongs[{{ $key }}][choice_number]" size="4" style="width: 14rem;" class="border border-primary">
                            <option value="1">{{ $quiz->quiz->choice1 }}</option>
                            <option value="2">{{ $quiz->quiz->choice2 }}</option>
                            <option value="3">{{ $quiz->quiz->choice3 }}</option>
                            <option value="4">{{ $quiz->quiz->choice4 }}</option>
                        </select>
                    </div>
                </div>
                <br>
            @endforeach
            </div>
            <div>
                <a href='/categories'>トップ画面に戻る</a>
                <input type="submit" value="回答する"/>
            </div>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection