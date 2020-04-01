@extends('layouts.master')

@section('content')
    <h1 class="page-header">Create Post</h1>
    <hr>
    {{ Form::open(array('action' => 'PostsController@store', 'method' => 'post')) }}
    <div class="form-group">
        {{ Form::label('myTitle', 'Create Title') }}
        {{ Form::text('myTitle','',['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Insert Content') }}
        {{ Form::textArea('body','',['class'=>'form-control']) }}
    </div>
    {{ Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {{ Form::close() }}
@endsection
