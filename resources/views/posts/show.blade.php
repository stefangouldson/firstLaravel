@extends('layouts.master')

@section('content')
    <h1 class="page-header">{{$post->title}}</h1>
    <hr>
    <p>{{$post->body}}</p>
    <a class="btn btn-success" href="{{route('posts.index')}}/{{$post->id}}/edit">Edit</a>

    {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'form-group')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        <br>
        {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
    {{ Form::close() }}

@endsection
