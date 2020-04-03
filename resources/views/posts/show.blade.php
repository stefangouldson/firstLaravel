@extends('layouts.master')

@section('content')

    <h1 class="page-header">{{$post->title}}</h1>
    <hr>
    <p>{{$post->body}}</p>
    <hr>

    <div class="d-flex justify-content-center">
        {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'post')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            <div class="btn-group">
                <a class="btn btn-secondary" href="{{route('posts.index')}}">Go back</a>
                <a class="btn btn-success" href="{{route('posts.index')}}/{{$post->id}}/edit">Edit</a>
            {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            </div>
        {{ Form::close() }}
    </div>

@endsection
