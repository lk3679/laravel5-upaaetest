@extends("layouts.app")

@section("content")
<br/>
<br/>
<h1>{{$title}}</h1>
<p>This a the laravel application </p>

@if(count($services)>0)
<ul>
@foreach($services as $service)
<li>
{{$service}}
</li>
@endforeach
</ul>
@endif



@endsection