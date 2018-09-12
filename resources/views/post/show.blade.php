@extends("layouts.app")

@section("content")

<br/>   
<br/>  

<h1>{{$post->title}}</h1>
<div>

    {{$post->body}}
</div>
@endsection