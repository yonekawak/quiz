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
        <h4>クイズ管理     [<a href='/admins/create'>クイズを追加する</a>]</h4>
        <p class="card-text">
            <div class="container">
                <div class="row">
                    <div class="col">
                    @foreach ($quizzes as $key => $quiz)
                    <div class="card" style="width: 50rem;">
                        <div class="card-body ry-4">
                            <h5 class="card-title"><a href="/admins/quizzes/{{ $quiz->id }}">{{ $quiz->id }}, {{ $quiz->question }}</a></h5>
                            <div class='quizzes'>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                １:<a>{{ $quiz->choice1 }}</a><br>
                                                ２:<a>{{ $quiz->choice2 }}</a><br>
                                                ３:<a>{{ $quiz->choice3 }}</a><br>
                                                ４:<a>{{ $quiz->choice4 }}</a><br>
                                            </div>
                                            <div class="col">
                                                <br>
                                                <br>
                                                答えの番号:<a>{{ $quiz->answer_number }}</a><br>
                                                カテゴリー:<a>{{ $quiz->category->name }}</a><br>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    <div class="col">
                        <div class='paginate'>
                            {{ $quizzes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection