@extends('layouts.app')

@section('content')

<h1 class="page-header">Your profile</h1>
<div class="container">
   <h2>{{$var}}</h2> 
    <div class="row">
        <div class="col-md-7">
            <img src="" style="width: 295px;" class="img-responsive">
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">{{$var}}'s posts</div>

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
