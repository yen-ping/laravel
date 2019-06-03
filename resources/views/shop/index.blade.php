@extends('layouts.master')

@section('title')
		Laravel Shopping Cart
@endsection

@section('content')
<div class="row settop">
@foreach($products->chunk(3) as $productChunk)
	{{--$productChunk."<BR>"--}}
	@foreach($productChunk as $product)
	{{--$product--}}
	<div class="col-sm-6 col-md-4">
		<div class="card" style="width: 18rem;">
	  		<img src="{{$product->imagePath}}" class="card-img-top" alt="...">
	  		<div class="card-body">
	    		<h3>{{$product->title}}</h3>
	    		<p class="description">{{$product->description}}</p>
	    		<div class="float-left price">{{$product->price}}</div>
	    		<a href="#" class="btn btn-primary float-right">BUY IT</a>
	  		</div>
		</div>
	</div>
	@endforeach
@endforeach
</div>
@endsection