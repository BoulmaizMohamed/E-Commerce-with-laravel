@extends('layouts.home')

@section('email')


<form action="/sendemail" method="post" >

@csrf

<label for="email">email:</label><br>
<input type="email" id="email" name="email"><br>

<label for="message">your message:</label><br>
<input type="text" id="message" name="message"><br>







 <button type="submit">Submit</button>


 </form>
 
 </br>





@endsection