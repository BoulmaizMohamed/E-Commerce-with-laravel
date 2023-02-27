@extends('layout.admin_layout')

@section('accesorys')


<h2>accesorys  liste</h2>
         
       

         <div>
        @foreach($produits as $produit)

        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="storage\$produit->image" >
  <div class="card-body">
    <h5 class="card-title">{{$produit->Id}}</h5>
    <h5 class="card-title">{{$produit->name}}</h5>
    <p class="card-text">{{ $produit ->description  }}</p>
    <p class="price">${{ $produit ->price  }}</p>
        <form action="/produit/Delete" method="post">
      @csrf

      
      <input type="hidden" id="Id" name="Id" value="{{ $produit ->Id  }}">
      
      <button  class="button" type ="submit" >DELETE</button>
      </form>   
      </div></div></div> 
      <br>



      
        @endforeach

        <br><br><br>






<h1>ajouter accesory </h1>

<form action="/add_accesory" method="post" enctype="multipart/form-data">

@csrf

<label for="name">produit name:</label>
<input type="text" id="name" name="name"><br>

<label for="price">produit price:</label>
<input type="number" id="price" name="price"><br>

<label for="price">produit description:</label>
<input type="text" id="desc" name="desc"><br>

<label for="Type">produit type:</label>
<select id="Type" name="Type" required>

 <option value="laptops">laptop</option>
 <option value="tools">tool</option>
  
</select>

<input type="file" id="image" name="image"><br>




 <button type="submit">Submit</button>


 </form>
 
 </br>



        
         
         <h4>update accesory </h4>

<form action="/produit/accesorys" method="post">
@csrf

<label for="Id">id for the product:</label>
<input type="text" id="Id" name="Id"><br><br>

<label for="name">new name:</label>
<input type="text" id="name" name="name"><br><br>

<label for="price">new price:</label>
<input type="number" id="price" name="price"><br><br>

<label for="description">new description:</label>
<input type="text" id="description" name="description"><br><br>

<button  class="button" type ="submit" >Update</button>
</form>    




 






@endsection