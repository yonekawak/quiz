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
    <body bgcolor="brack">
     <div class="quizzes row-8">
      <div class="container text-center">
        <div class="row">
            <p class="card-text">
             <div class="container">
              <div class="row">
               <div class="col">
                <div class="card" style="width: 18rem;">
                 @foreach ($quizzes as $quiz)
                 @endforeach
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/000.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「000」では0類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/100.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「100」では1類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </p>
            <p class="card-text">
             <div class="container">
              <div class="row">
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/200.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「200」では2類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/300.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「300」では3類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </p>
            <p class="card-text">
             <div class="container">
              <div class="row">
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/400.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「400」では4類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/500.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「500」では5類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </p>
            <p class="card-text">
             <div class="container">
              <div class="row">
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/600.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「600」では6類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/700.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「700」では7類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </p>
            <p class="card-text">
             <div class="container">
              <div class="row">
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/800.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「800」では8類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
               <div class="col">
                <div class="card" style="width: 18rem;">
                 <div class="card-body">
                  <a href="/categories/{{ $quiz->category->id}}/show">
                   <img src="css/900.PNG" class="rounded" width="90" height="150" alt="...">
                  </a>
                  <br>
                  <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
                  <p class="card-text">分類番号「900」では9類に関わる問題が出題されます</p>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
@endsection