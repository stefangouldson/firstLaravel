@extends('layouts.master')

@section('content')

    <h1 class="page-header">{{$post->title}}</h1>
    <hr>
    <p>{{$post->body}}</p>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <div class="d-flex justify-content-center">
        {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'post')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            <div class="btn-group">
                <a class="btn btn-success" href="{{route('posts.index')}}/{{$post->id}}/edit">Edit</a>
            {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            </div>
        {{ Form::close() }}
    </div>
    @endif
    @endif
@endsection
