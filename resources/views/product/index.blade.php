@extends("layouts.app")

@section("content")

<br/>
商品資料
   <br/>  
 <br/>

@if(count($products)>1) 
  
  @foreach($products as $product)
   <div class="well">
   <h3>{{$product->BarCode}}</h3>
   </div>
  @endforeach
  
@else
  <p>No posts found</P>
@endif
@endsection