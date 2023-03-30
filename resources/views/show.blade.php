@extends('layout')

@section('content')

<div class="card">
    <div class="card-header text-center">
        Content
    </div>
    <div class="card-body">
            <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <p class="card-text text-dark">Category: {{ $post->categories->name }}</p>
            </div><hr>

            <div>
                <a href="/posts" class="btn btn-success">Back</a>
            </div>
        
    </div>
</div>
@endsection