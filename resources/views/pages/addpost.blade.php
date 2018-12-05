@extends('layout.app')

@section('content')

<form action="" method="post" class="form-group">
    @csrf
    <input type="text" name="title" placeholder="Enter the blog title" class="form-control">

</form>

@endsection
