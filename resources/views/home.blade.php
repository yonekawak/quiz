@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align:center;">
                        {{ Auth::user()->name }}さんようこそ！
                        <br>
                        <a href="/categories" class='btn btn-secondary'>Go Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
