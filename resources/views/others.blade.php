@extends('layouts.app')

@section('title', 'Database Others')

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
            <form action="/others/{{$others->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Page Name -->
                <div class="form-group">
                    <label for="">Page Name</label>
                    <input type="text" class="form-control" name="pagename" placeholder="Page Name" value="{{$others->pagename}}">
                </div>
                @error('pagename')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- NavBar Name -->
                <div class="form-group">
                    <label for="">NavBar Name</label>
                    <input type="text" class="form-control" name="navbarname" placeholder="NavBar Name" value="{{$others->navbarname}}">
                </div>
                @error('navbarname')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Copyright Name -->
                <div class="form-group">
                    <label for="">Copyright Name</label>
                    <input type="text" class="form-control" name="copyrightname" placeholder="Copyright Name" value="{{$others->copyrightname}}">
                </div>
                @error('copyrightname')
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
