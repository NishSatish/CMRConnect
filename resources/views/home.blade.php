@extends('layouts.app')

@section('content')

<h1 class="page-header">Your profile</h1>
<div class="container">
   <h2>{{$var}}</h2> 
    <div class="row">
        <div class="col-md-7">
            <img draggable="false" src="/storage/profile_pics/{{$pp}}" style="width: 295px;" class="img-responsive">
            {!! Form::open(['action' => 'ProPicControl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {!! Form::file('profile_pic', ['class' => 'btn btn-primary']) !!}
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
        <br><br><br>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(auth()->user()->name = $var)
                        Your posts
                    @else
                        {{$var}}'s posts
                    @endif 
                    <a href="/posts/create"><button class="btn btn-success pull-right">Create post</button></a>     
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                        <div class="well">
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
