@extends('layout.admin_layout')

@section('build')


<h3>add chip </h3>

<form action="/add_chip" method="post">

@csrf

<label for="name">chip name:</label>
<input type="text" id="name" name="name"><br>

<label for="price">chip price:</label>
<input type="number" id="price" name="price"><br>

<label for="price">chip description:</label>
<input type="text" id="desc" name="desc"><br>


 <button type="submit">Submit</button>


 </form>
 
 </br>














@endsection