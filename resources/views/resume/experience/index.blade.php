@extends('layouts.app')

@section('title', 'Data Resume Experience')

@section('content')
<div class="container">
    <a href="/resume-experience/create" class="btn btn-primary mb-3">Add Data</a>
    @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Success</strong>
                <p>{{$message}}</p>
            </div>
            @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" style="border-color: black; margin: 0 auto;">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Experience</th>
                    <th>Place</th>
                    <th>Year</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $i = 1
                @endphp
                @foreach ($resumeExperience as $resumeexperience)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$resumeexperience->experience}}</td>
                        <td>{{$resumeexperience->place}}</td>
                        <td>{{$resumeexperience->year}}</td>
                        <td>{{$resumeexperience->description}}</td>
                        <td>
                            <div style="display:flex; justify-content:center;">
                                <a href="{{route('resume-experience.edit', $resumeexperience->id)}}" class="btn btn-warning" style="margin-right: 5px;">
                                    <i class="fas fa-solid fa-pen"></i>
                                </a>
                                <form action="{{route('resume-experience.destroy', $resumeexperience->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
