@extends('layouts.master')

@section('content')
    <h1>THE POSTS PAGE</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
        <hr>
            <div class="post">
                <h2><a href="{{route('posts.index')}}/{{$post->id}}">{{$post->title}}</a></h2>
            </div>
        @endforeach
    @endif
@endsection
