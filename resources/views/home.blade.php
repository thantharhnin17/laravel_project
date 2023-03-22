@extends('layout')

@section('content')
    <div>
        <a href="{{ route('root') }}" class="btn btn-success">go to root path</a>
        <a href="/posts/create" class="btn btn-success">Create New Post</a>
    </div>
    <br>

    <div class="card">
        <div class="card-header text-center">
            Content
        </div>
        <div class="card-body">
            @foreach ($data as $post)
                <div>
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <div class="d-flex">
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary me-2">View...</a>
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning me-2"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="/posts/{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Delete">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>
@endsection
