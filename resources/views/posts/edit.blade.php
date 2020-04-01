@extends('layouts.master')

@section('content')

    <h1 class="page-header">Edit Content</h1>
    <hr>
    {{ Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'post')) }}
    <div class="form-group">
        {{ Form::label('myTitle', 'Title',['for' => 'myTitle'] ) }}
        {{ Form::text('myTitle', $post->title,['class' => 'form-control', 'name' => 'myTitle']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Content') }}
        {{ Form::textArea('body', $post->body,['class' => 'form-control']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}<span> <a class="btn btn-success" href="{{route('posts.index')}}/{{$post->id}}"">Go Back</a></span>

    {{ Form::close() }}
@endsection
