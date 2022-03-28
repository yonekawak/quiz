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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="jumbotron">
                            @if (session('status'))
                                <h1 class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </h1>
                            @endif
                            <div style="text-align:center;">
                                <h6>{{ Auth::user()->name }}さんようこそ！</h6>
                                <br>
                                <h6>本サイトでは、司書資格を目指す学生に対し
                                <br>目録表の使い方を楽しく学んでもらおうと考えたクイズサイトです。</h6>
                                <a href="/categories" class='btn btn-secondary'>Go page &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
