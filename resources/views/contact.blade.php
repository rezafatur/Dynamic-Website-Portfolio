@extends('layouts.app')

@section('title', 'Database Contact')

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
            <form action="/contact/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Email -->
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$contact->email}}">
                </div>
                @error('email')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Phone -->
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$contact->phone}}">
                </div>
                @error('phone')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Location -->
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Location" value="{{$contact->location}}">
                </div>
                @error('location')
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
