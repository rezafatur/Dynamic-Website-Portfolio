@extends('layouts.app')

@section('title', 'Data Portfolio')

@section('content')
<div class="container">
    <a href="/portfolio-project" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('portfolio-project.update', $portfolioProject->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Image -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="/image/{{$portfolioProject->image}}" alt="" width="100px" height="auto">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Title -->
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$portfolioProject->title}}">
                </div>
                @error('title')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Link -->
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Link" value="{{$portfolioProject->link}}">
                </div>
                @error('link')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
