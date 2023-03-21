@extends('layout')

@section('content')


<div class="card">
    <div class="card-header text-center">
        New Post
    </div>
    <div class="card-body">
        <form action="/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-secondary">Back</a>
        </form>

    </div>
</div>
@endsection