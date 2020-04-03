@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Posts</div>

                <div class="card-body">
                    @if ( count($posts) > 0)
                    @foreach ($posts as $post)
                    <div class="alert alert-success" role="alert">
                        <a href="{{route('posts.index')}}/{{$post->id}}">
                            <h1>{{$post->title}}</h1>
                        </a>
                    </div>
                    @endforeach
                @endif
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
