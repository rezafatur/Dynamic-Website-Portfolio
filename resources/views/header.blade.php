@extends('layouts.app')

@section('title', 'Database Header')

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
            <form action="/header/{{$header->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Image -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="/image/{{$header->image}}" alt="" width="25%" height="auto">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Name -->
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$header->name}}">
                </div>
                @error('name')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Interest -->
                <div class="form-group">
                    <label for="">Interest</label>
                    <input type="text" class="form-control" name="interest" placeholder="Interest" value="{{$header->interest}}">
                </div>
                @error('interest')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Country -->
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Country" value="{{$header->country}}">
                </div>
                @error('country')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- LinkedIn -->
                <div class="form-group">
                    <label for="">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="{{$header->linkedin}}">
                </div>
                @error('linkedin')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- GitHub -->
                <div class="form-group">
                    <label for="">GitHub</label>
                    <input type="text" class="form-control" name="github" placeholder="GitHub" value="{{$header->github}}">
                </div>
                @error('github')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Instagram -->
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{$header->instagram}}">
                </div>
                @error('instagram')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Spotify -->
                <div class="form-group">
                    <label for="">Spotify</label>
                    <input type="text" class="form-control" name="spotify" placeholder="Spotify" value="{{$header->spotify}}">
                </div>
                @error('spotify')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- YouTube -->
                <div class="form-group">
                    <label for="">YouTube</label>
                    <input type="text" class="form-control" name="youtube" placeholder="YouTube" value="{{$header->youtube}}">
                </div>
                @error('youtube')
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
