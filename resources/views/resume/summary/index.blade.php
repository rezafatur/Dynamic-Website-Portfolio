@extends('layouts.app')

@section('title', 'Database Resume Summary')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Success</strong>
                <p>{{$message}}</p>
            </div>
            @endif
            <form action="/resume-summary/{{$resumesummary->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Name -->
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$resumesummary->name}}">
                </div>
                @error('name')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Description -->
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea
                        name="description"
                        id=""
                        cols="30"
                        rows="10"
                        class="form-control"
                        placeholder="Description"
                    >{{$resumesummary->description}}</textarea>
                </div>
                @error('description')
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
