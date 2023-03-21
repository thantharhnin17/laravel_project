@extends('layout')

@section('content')

<div>
    <a href="/posts/create" class="btn btn-success">Create New Post</a>
</div>
<br>

<div class="card">
    <div class="card-header text-center">
        Content
    </div>
    <div class="card-body">
        @foreach($data as $post)
            <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="/posts/{{ $post->id }}" class="btn btn-primary">View...</a>
            </div><hr>
        @endforeach
        
    </div>
</div>
@endsection

{{-- 43min --}}