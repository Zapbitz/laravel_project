@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$project->title}}</h1>
<p>{{$project->body}}</p>
<small>{{$project->author}}</small>
<hr>
<a href="/pages/{{$project->id}}/edit" class="btn btn-info btn-large">Edit</a>
<a href="/pages/{{$project->id}}" class="btn btn-danger btn-large">Delete</a>
</div>

@endsection
