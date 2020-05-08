@extends('layout')
@section('title', 'Shopping cart')
@section('content')
<div class="container products">
 <div class="colomn">
    <div>
        <h2>Shopping cart - {{ $totalPrice }}$</h2><br>     
    </div>

     @foreach($products as $product)
    <div>
         <h4>{{ $product['item']['name'] }} - X{{$product['quantity']}} </h4>
         <p>{{ \Illuminate\Support\Str::limit($product['item']['description'], 200) }}</p>
         <p>Price: {{$product['item']['price']}}$</p>
          <p class="btn-holder"><a href="{{ url('deleteFromCart/'.$product['item']['id'])}}" class="btn btn-warning btn-block text-center" role="button">Delete from cart</a></p>
    </div>
   @endforeach
 </div>
</div>
@endsection

