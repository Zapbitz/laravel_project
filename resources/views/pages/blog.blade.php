@extends('layout.app')

@section('content')
@if(count($project)>0)
    @foreach ($project as $projects)
    <div class="jumbotron m-3 p-3">
        <h1 style="text-transform:uppercase;">{{ $projects->title }}</h1>
        <small>{{ $projects->created_at }}</small>
        <p>{{ $projects->body }}</p>
        <a href="/show/{{$projects->id}}" class="btn btn-warning">Read More</a>
    </div>
    @endforeach
@else
    <h1>NO POST UPLOAD YET!!!</h1>
@endif

@endsection
