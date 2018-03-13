@extends('layouts/app')

	@section('content')
		@foreach($users as $user)
			<div class="well">
				<a href="/profile/{{$user->id}}">
					<img draggable="false" style="height: 128px; width: 128px;" src="/storage/profile_pics/{{$user->profile_pic}}">
					<span class="text-center">{{$user->name}}</span>
				</a>
				<span class="pull-right" style="text-transform: uppercase;">{{$user->grade}} {{$user->section}}</span>
			</div>
		@endforeach
	@endsection