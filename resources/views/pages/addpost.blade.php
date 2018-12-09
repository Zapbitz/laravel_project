@extends('layout.app')

@section('content')

<form action="/create" method="post" class="form-group m-3 p-3 bg-light" >
    <h1 class="text-center">Write an Article!</h1>
    @csrf
    <input type="text" name="title" placeholder="Enter the blog title" class="form-control my-3">
    <textarea name="msg" cols="30" rows="10" class="form-control my-3" placeholder="Enter the content"></textarea>
    <input type="submit" value="PUBLISH" class="btn btn-warning btn-block">
</form>

@endsection
