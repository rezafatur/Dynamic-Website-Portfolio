@extends('layouts.app')

@section('title', 'Data Skills Other')

@section('content')
<div class="container">
    <a href="/skills-other/create" class="btn btn-primary mb-3">Add Data</a>
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
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $i = 1
                @endphp
                @foreach ($skillsOther as $skillsother)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="/image/{{$skillsother->logo}}" alt="Logo" class="img-fluid" width="100px" height="auto">
                        </td>
                        <td>{{$skillsother->title}}</td>
                        <td>{{$skillsother->level}}</td>
                        <td>
                            <div style="display:flex; justify-content:center;">
                                <a href="{{route('skills-other.edit', $skillsother->id)}}" class="btn btn-warning" style="margin-right: 5px;">
                                    <i class="fas fa-solid fa-pen"></i>
                                </a>
                                <form action="{{route('skills-other.destroy', $skillsother->id)}}" method="POST">
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
