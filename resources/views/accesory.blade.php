@extends('layouts.home')

@section('Accesorys')

<section>

<h1>Accesorys LIST </h1>


        
        
        @foreach($produit as $produit)
        
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="storage\$produit->image" >
  <div class="card-body">
    <h5 class="card-title">{{$produit->name}}</h5>
    <p class="card-text">{{ $produit ->description  }}</p>
    <p class="price">${{ $produit ->price  }}</p>
    <form action="/client/cart/add" method="post">
@csrf

<button name="subject" type="submit" value="{{$produit->Id}}">cart</button>
</form>
  </div>
</div>

@endforeach






</section>
  @endsection