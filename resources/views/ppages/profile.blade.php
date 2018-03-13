@extends('layouts.app')

@section('content')

<h1 class="page-header">
    @if(auth()->user()->id == $user->id)
        Your profile 
    @else
        {{$user->name}}'s Profile 
    @endif</h1>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <img draggable="false" src="/storage/profile_pics/{{$user->profile_pic}}" style="width: 295px;" class="img-responsive">
            {!! Form::open(['action' => 'ProPicControl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {!! Form::file('profile_pic', ['class' => 'btn btn-primary']) !!}
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
        <br><br><br>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(auth()->user()->id == $user->id)
                        Your posts
                        <a href="/posts/create"><button class="btn btn-success pull-right">Create post</button></a>
                    @else
                        {{$user->name}}'s posts
                    @endif                          
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="well">
                                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                            </div>
                        @endforeach
                     @else
                        No posts found.
                     @endif      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
