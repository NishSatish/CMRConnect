@extends('layouts/app')

@section('content')
	<a href="/" style="color: #00ECFF;">< Back to home</a><br>
	<div class="text-center">
		<img style="width: 40%; height: 40%;" src="/storage/cover_pics/{{$cp}}">
	</div>	
	<h1 class="page-header">{{$post->title}}</h1>
	<small>By <a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a></small>				
	<hr>
	<div>
		{{$post->body}}
	</div>
@endsection