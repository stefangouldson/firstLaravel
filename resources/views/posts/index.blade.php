@extends('layouts.master')

@section('content')
    <h1>The posts page</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
        <hr>
            <div>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
    @endif
@endsection
