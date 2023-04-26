@extends('layouts.app')

@section('title', 'Data Portfolio')

@section('content')
<div class="container">
    <a href="/portfolio-project/create" class="btn btn-primary mb-3">Add Data</a>
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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $i = 1
                @endphp
                @foreach ($portfolioProject as $portfolioproject)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="/image/{{$portfolioproject->image}}" alt="Logo" class="img-fluid" width="100px" height="auto">
                        </td>
                        <td>{{$portfolioproject->title}}</td>
                        <td>{{$portfolioproject->link}}</td>
                        <td>
                            <div style="display:flex; justify-content:center;">
                                <a href="{{route('portfolio-project.edit', $portfolioproject->id)}}" class="btn btn-warning" style="margin-right: 5px;">
                                    <i class="fas fa-solid fa-pen"></i>
                                </a>
                                <form action="{{route('portfolio-project.destroy', $portfolioproject->id)}}" method="POST">
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
