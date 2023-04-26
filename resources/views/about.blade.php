@extends('layouts.app')

@section('title', 'Database About Me')

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
            <form action="/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Profile -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="/image/{{$about->profile}}" alt="" width="25%" height="auto">
                </div>
                <div class="form-group">
                    <label for="">Profile</label>
                    <input type="file" class="form-control" name="profile">
                </div>
                @error('profile')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- CV -->
                <div class="form-group">
                    <label for="">CV</label>
                    <input type="file" class="form-control" name="cv">
                </div>
                @error('cv')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Full Name -->
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="{{$about->fullname}}">
                </div>
                @error('fullname')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Age -->
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Age" value="{{$about->age}}">
                </div>
                @error('age')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Degree -->
                <div class="form-group">
                    <label for="">Degree</label>
                    <input type="text" class="form-control" name="degree" placeholder="Degree" value="{{$about->degree}}">
                </div>
                @error('degree')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Interest -->
                <div class="form-group">
                    <label for="">Interest</label>
                    <input type="text" class="form-control" name="interest" placeholder="Interest" value="{{$about->interest}}">
                </div>
                @error('interest')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Phone -->
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$about->phone}}">
                </div>
                @error('phone')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Email -->
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$about->email}}">
                </div>
                @error('email')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Freelance -->
                <div class="form-group">
                    <label for="">Freelance</label>
                    <input type="text" class="form-control" name="freelance" placeholder="Freelance" value="{{$about->freelance}}">
                </div>
                @error('freelance')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Image From -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="/image/{{$about->imagefrom}}" alt="" width="25%" height="auto">
                </div>
                <div class="form-group">
                    <label for="">Image From</label>
                    <input type="file" class="form-control" name="imagefrom">
                </div>
                @error('imagefrom')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- From -->
                <div class="form-group">
                    <label for="">From</label>
                    <input type="text" class="form-control" name="from" placeholder="From" value="{{$about->from}}">
                </div>
                @error('from')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Image Currently -->
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="/image/{{$about->imagecurrently}}" alt="" width="25%" height="auto">
                </div>
                <div class="form-group">
                    <label for="">Image Currently</label>
                    <input type="file" class="form-control" name="imagecurrently">
                </div>
                @error('imagecurrently')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Currently -->
                <div class="form-group">
                    <label for="">Currently</label>
                    <input type="text" class="form-control" name="currently" placeholder="Currently" value="{{$about->currently}}">
                </div>
                @error('currently')
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
