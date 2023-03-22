@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            Edit Post
        </div>
        <div class="card-body">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                {{-- Put method as post --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{old('name', $post->name)}}" class="form-control {{($errors->first('name') ? " form-error" : "")}} " id="name" name="name"
                        placeholder="Enter Name" >
                    <span class="help-inline">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control {{($errors->first('description') ? " form-error" : "")}} "
                        placeholder="Enter Description" >{{old('description', $post->description)}}</textarea>
                    <span class="help-inline">@error('description'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-secondary">Back</a>
            </form>

        </div>
    </div>
@endsection
