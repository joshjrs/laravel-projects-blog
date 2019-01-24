@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-3">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header text-center">
                Posts
            </div>
            <div class="card-body">
                <div class="card-text">
                    <h1 class="text-center">{{ $posts_count }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card text-white bg-danger mb-3">
            <div class="card-header text-center">
                Trashed Posts
            </div>
            <div class="card-body">
                <div class="card-text">
                    <h1 class="text-center">{{ $trashed_count }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-header text-center">
                Users
            </div>
            <div class="card-body">
                <div class="card-text">
                    <h1 class="text-center">{{ $users_count }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card text-white bg-info mb-3">
            <div class="card-header text-center">
                Categories
            </div>
            <div class="card-body">
                <div class="card-text">
                    <h1 class="text-center">{{ $categories_count }}</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
   
@endsection
