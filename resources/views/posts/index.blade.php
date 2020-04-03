@extends('layouts.master')

@section('content')
    <h1>THE POSTS PAGE</h1>
    <hr>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="post">
                <h2><a href="{{route('posts.index')}}/{{$post->id}}">{{$post->title}}</a></h2>
            </div>
            <hr>
        @endforeach
    @endif
@endsection
