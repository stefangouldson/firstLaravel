@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <h1>This a test page</h1>
    <p>{{ 2==2 ? "Hello" : "Does not equal"}}</p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    <h2>Control Structures</h1>
    @if(true)
        <p>Only appear if true</p>
    @else
        <p>Only display if false</p>
    @endif

    <hr>

    @for($i=0; $i<5; $i++)
    <p>{{ $i+1 }}. Iteration</p>
    @endfor
    <hr>

    <h2>Xss</h2>
    {{ "<script>alert('hello')</script>"}} <span>Replace the inside { with !!</span>
    {!! "<script>alert('hello')</script>"!!}
    </div>
</div>
@endsection
