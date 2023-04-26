@extends('layouts.app')

@section('title', 'Data Resume Education')

@section('content')
<div class="container">
    <a href="/resume-education" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('resume-education.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Major -->
                <div class="form-group">
                    <label for="">Major</label>
                    <input type="text" class="form-control" name="major" placeholder="Major">
                </div>
                @error('major')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Place -->
                <div class="form-group">
                    <label for="">Place</label>
                    <input type="text" class="form-control" name="place" placeholder="Place">
                </div>
                @error('place')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Year -->
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="text" class="form-control" name="year" placeholder="Year">
                </div>
                @error('year')
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
