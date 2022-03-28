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
        <h1>作成画面</h1>
        <form action="/admins" method="POST">
            @csrf
            <div class="question">
                <a>問題文</a>
                <textarea type="text" name="post[question]" placeholder="問題文"></textarea>
            </div>
            <div class="body">
                <br>
                <a>１</a>
                <textarea name="post[choice1]" placeholder="選択肢１"></textarea>
                <br>
                <a>２</a>
                <textarea name="post[choice2]" placeholder="選択肢２"></textarea>
                <br>
                <a>３</a>
                <textarea name="post[choice3]" placeholder="選択肢３"></textarea>
                <br>
                <a>４</a>
                <textarea name="post[choice4]" placeholder="選択肢４"></textarea>
            </div>
            <div>
                <a>答えの番号</a>
                <input type="number" name="post[answer_number]" placeholder="答えの番号"/>
            </div>
            <div class="category">
                <h6>カテゴリー</h6>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/admins">戻る</a>]</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
@endsection