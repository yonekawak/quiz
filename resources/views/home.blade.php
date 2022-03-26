@extends('layouts.app')

@section('content')
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
                        {{ Auth::user()->name }}さんようこそ！
                        <br>
                        <a href="/categories" class='btn btn-secondary'>Go page &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
