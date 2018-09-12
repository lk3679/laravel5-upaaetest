@extends("layouts.app")

@section("content")

<br/>   <br/>  
This is Post <br/>

@if(count($posts)>1) 
  
  @foreach($posts as $post)
   <div class="well">
   <h3><a href="../public/post/{{$post->id}}">{{$post->title}}</a></h3>
   </div>
  @endforeach
  
@else
  <p>No posts found</P>
@endif
@endsection