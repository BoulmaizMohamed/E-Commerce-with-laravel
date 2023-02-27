@extends('layouts.home')

@section('laptops')






        
        
        @foreach($produit as $produit)
        @csrf
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card"  >
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
</div>
</br>
@endforeach




  @endsection