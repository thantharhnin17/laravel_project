@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            New Post
        </div>
        <div class="card-body">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="/posts" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control {{($errors->first('name') ? " form-error" : "")}} " id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                    <span class="help-inline">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control {{($errors->first('description') ? " form-error" : "")}} "
                        placeholder="Enter Description">{{ old('description') }}</textarea>
                    <span class="help-inline">@error('description'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <select name="category_id" class="form-select {{($errors->first('category_id') ? " form-error" : "")}}" aria-label="Default select example">
                        <option value="">Select Category</option>
                        @foreach ($categories as $cat)
                        <option value="{{$cat->id}}" {{$cat->id == old('category_id') ? 'selected' : ''}}>{{$cat->name}}</option>
                        @endforeach
                    
                      </select>
                      <span class="help-inline">@error('category_id'){{$message}}@enderror</span>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-secondary">Back</a>
            </form>

        </div>
    </div>
@endsection
