@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>quizzez</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <h1>トップ画面</h1>
        <div class='quizzes'>
            <div class="container text-center">
                <div class="row">
                    <div class="col-9">
                        <h6>ステージ</h6>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/1/show">ステージ0</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/2/show">ステージ1</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/3/show">ステージ2</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/4/show">ステージ3</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/5/show">ステージ4</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/6/show">ステージ5</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/7/show">ステージ6</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/8/show">ステージ7</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/9/show">ステージ8</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/categories/10/show">ステージ9</a>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <h6>ランキング</h6>
                        //ランキング機能
                        <h6>目標</h6>
                        //目標提示
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
@endsection