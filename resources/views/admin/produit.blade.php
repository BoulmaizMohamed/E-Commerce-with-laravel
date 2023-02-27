@extends('layout.admin_layout')

@section('product')


<h1>ajouter laptop </h1>


         <form action="/add_produit" method="post" enctype="multipart/form-data">

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

 </br></br></br>


<h1>laptop  liste</h1>
         
       

         <div>
        @foreach($produits as $produit)

        <li><img src="{{asset('storage/app/public/img/.$produit->image')}}"> {{$produit->name}}-- {{ $produit ->Id  }}

        <form action="/produit/Delete" method="post">
      @csrf

      
      <input type="hidden" id="Id" name="Id" value="{{ $produit ->Id  }}">
      
      <button  class="button" type ="submit" >DELETE</button>
      </form>    </li>
        
        @endforeach

        
        </br></br></br></br>
         
         <h1>update laptop </h1>

<form action="/produit/update" method="post">
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