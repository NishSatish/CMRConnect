@extends('layouts.app')

@section('content')
	@foreach($posts as $post)
		<div class="text-center">
			<div class="panel panel-default">
				<div class="panel-heading text-left">
					<a href="/profile/{{$post->user->id}}">
						<img style="width: 40px; height: 40px;" src="/storage/profile_pics/{{$post->user->profile_pic}}">						
						{{$post->user->name}}
						<a href="/posts/{{$post->id}}"><button class="btn btn-success pull-right">View post</button></a>     
					</a>
				</div>
				<div class="panel-body">
					<img class="img-responsive" src="/storage/cover_pics/{{$post->cover_pic}}">
				</div>
				<div class="panel-footer">
					{{$post->title}}
				</div>
			</div>
			<hr style="color: black;">
			<br>			
		</div>
	@endforeach
@endsection