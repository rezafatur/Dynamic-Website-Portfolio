@extends('layouts.app')

@section('title', 'Data Resume Experience')

@section('content')
<div class="container">
    <a href="/resume-experience" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('resume-experience.update', $resumeExperience->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Experience -->
                <div class="form-group">
                    <label for="">Experience</label>
                    <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{$resumeExperience->experience}}">
                </div>
                @error('experience')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Place -->
                <div class="form-group">
                    <label for="">Place</label>
                    <input type="text" class="form-control" name="place" placeholder="Place" value="{{$resumeExperience->place}}">
                </div>
                @error('place')
                <p style="color: red; font-size: small">{{$message}}</p>
                @enderror

                <!-- Year -->
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="text" class="form-control" name="year" placeholder="Year" value="{{$resumeExperience->year}}">
                </div>
                @error('year')
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
                    >{{$resumeExperience->description}}</textarea>
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
