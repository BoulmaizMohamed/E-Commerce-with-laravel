@extends('layouts.client')

@section('cart')
<section>


<h3>Your elements </h3> 
<br><br>

<ul class="list-group list-group-flush">      
@foreach($produit as $produit)

<li class="list-group-item"><input name="product" value="{{$produit->price}}" type="checkbox" onclick="totalIt()" />{{$produit->name}}----{{$produit->description}}-----price:<strong>{{$produit->price}}$</strong>
<form action="/client/cart/delete" method="post">
      @csrf

      <input type="hidden" id="Id" name="Id" value="{{ $produit ->id  }}">
      
      <button  class="button" type ="submit" >DELETE</button>
      </form>  </li><br>




@endforeach
</ul>

<form action="/CLIENT/buy" method="post">
      @csrf

      <label for="card">card numbre:</label>
<input type="number" id="card" name="card"><br>

<label for="cvv">cvv:</label>
<input type="number" id="cvv" name="cvv"><br>

 Total:
<input id="price" value="total" readonly="readonly" type="text" name="total" aling="right" />

<button  class="button" type ="submit" >buy</button>

</form> 


</section>



<script type="text/javascript">  

function totalIt() {
  var input = document.getElementsByName("product");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementsByName("total")[0].value = total.toFixed(2);
}
</script>


@endsection