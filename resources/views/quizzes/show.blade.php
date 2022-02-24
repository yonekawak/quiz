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
        <div class='quizzes'>
            <div class='quiz'>
                <h2 class='question'>Q問題文</h2>
                <p class='choice1'>選択肢１</p>
                <p class='choice2'>選択肢２</p>
                <p class='choice3'>選択肢３</p>
                <p class='choice4'>選択肢４</p>
                <a href=/quizzes>トップ画面に戻る</a>
                <a href=>回答する</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>