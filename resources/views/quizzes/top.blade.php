<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>quizzez</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <h1>トップ画面</h1>
        <div class='quiz'>
            <nav class="navbar navbar-expand-lg navbar-light text-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/quizzes">レッスン（トップ画面）</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">マイページ（学習画面）</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">管理者ページ（管理画面）</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="container text-center">
                <div class="row">
                    <div class="col-9">
                        <h6>ステージ</h6>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/{{ $quiz->id }}" class="card-link">ステージ0</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ1</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ2</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ3</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ4</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ5</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ6</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ7</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ8</a>
                            </p>
                        </div>
                        <div class="card text-center" style="width: 18rem;">
                            <p class="card-body">
                                <a href="/quizzes/show" class="card-link">ステージ9</a>
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