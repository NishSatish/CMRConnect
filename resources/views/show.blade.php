@extends('layouts/app')

@section('content')
	<button class="btn btn-primary"><a href="/home" style="color: white;">Go back</a></button>
	<h1 class="page-header">{{$post->title}}</h1>
	<small>By <a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a></small>
	<img style="width: 100%; height: 70%;" src="/storage/cover_pics/{{$cp}}">
	<hr>
	<div>
		{{$post->body}}
	</div>
@endsection