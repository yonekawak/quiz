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
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="quizzes row-8">
            <div class="container text-center">
                <div class="row">
                    <div class="col-7 m-3 p-3">
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ0</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ1</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ2</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ3</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ4</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ5</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ6</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ7</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ8</a>
                        </button>
                        <br>
                        <button type="button" class="btn btn-light btn-lg m-3 p-3">
                            <a href="/categories/1/show" class="text-decoration-none">ステージ9</a>
                        </button>
                    </div>
                    <div class="col-3 m-3 p-3">
                         <h6>ランキング</h6>
                        //ランキング機能
                        <br>
                        <h6>twitter連携</h6>
                        //twitter画面
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
@endsection