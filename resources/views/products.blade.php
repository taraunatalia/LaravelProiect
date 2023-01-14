@extends('layout')

@section('content')


<div class="row">
 @foreach($products as $product)
 <div class="col-xs-18 col-sm-6 col-md-3">
 <div class="thumbnail">
 <img src="{{ $product->image }}" width="300" height="400">
 <div class="caption">
 <h4>{{ $product->name }}</h4>
 <p>{{ $product->description }}</p>
 <p><strong>Price: </strong> {{ $product->price }} RON</p>
 <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btnwarning btn-block text-center" role="button">Add to cart</a> </p>
 </div>
 </div>
 </div>
 @endforeach
</div>

@endsection