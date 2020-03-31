@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <h1>This is the {{$title}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    @if(count($names)>0)
    <ul>
        @foreach($names as $name)
        <li>{{$name}}</li>
        @endforeach
    </ul>
    @endif
    </div>
</div>
@endsection
