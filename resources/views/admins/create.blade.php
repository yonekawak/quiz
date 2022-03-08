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
        <h1>クイズ作成</h1>
        <form action="/admins" method="POST">
            @csrf
            <div class="question">
                <h2>問題文</h2>
                <input type="text" name="post[question]" placeholder="問題文"/>
            </div>
            <div class="body">
                <h2>選択肢１</h2>
                <textarea name="post[choice1]" placeholder="選択肢１"></textarea>
                <h2>選択肢２</h2>
                <textarea name="post[choice2]" placeholder="選択肢２"></textarea>
                <h2>選択肢３</h2>
                <textarea name="post[choice3]" placeholder="選択肢３"></textarea>
                <h2>選択肢４</h2>
                <textarea name="post[choice4]" placeholder="選択肢４"></textarea>
            </div>
            <div>
                <h2>答えの番号</h2>
                <input type="number" name="post[answer_number]" placeholder="答えの番号"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection