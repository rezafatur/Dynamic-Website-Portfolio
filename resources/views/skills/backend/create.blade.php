@extends('layouts.app')

@section('title', 'Data Skills Backend')

@section('content')
<div class="container">
    <a href="/skills-backend" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('skills-backend.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Logo -->
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                @error('logo')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Title -->
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                @error('title')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Level -->
                <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" class="form-control" name="level" placeholder="Level">
                </div>
                @error('level')
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
