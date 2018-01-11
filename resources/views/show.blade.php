@extends('layouts/app')

@section('content')
	<button class="btn btn-primary"><a href="/home" style="color: white;">Go back</a></button>
	<h1 class="page-header">{{$post->title}}</h1>
	<small>By {{$post->user->name}}</small>

	<div class="well">
		{{$post->body}}
	</div>
@endsection