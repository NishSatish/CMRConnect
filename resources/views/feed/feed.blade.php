@extends('layouts.app');
	@section('content')
		@foreach($feedposts as $feedpost)
			<div class="container">
				<h3>{{$feedpost->title}}</h3>
				<small>{{$feedpost->user->name}}</small>
			</div>
		@endforeach
		dede
	@endsection