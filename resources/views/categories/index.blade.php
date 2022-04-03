@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>quizzez</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
  <div class="container text-center">
   <div class="container">
    <div class="row">
     @foreach ($quizzes as $quiz)
     @endforeach
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/000.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
        　&#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「000」では0類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/100.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「100」では1類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/200.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「200」では2類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/300.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「300」では3類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>

      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/400.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「400」では4類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/500.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「500」では5類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>

      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/600.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「600」では6類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/700.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「700」では7類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/800.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「800」では8類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
      
      <div class="col">
       <div class="card" style="width: 38rem;">
        <div class="card-body">
         <a href="/categories/{{ $quiz->category->id}}/show">
          <img src="css/900.PNG" class="rounded" width="90" height="150" alt="...">
         </a>
         &#9756;画像をクリックしてスタート
         <h6 class="card-text">分類番号「900」では9類に関わる問題が出題されます。</h6>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>
@endsection