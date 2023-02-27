@extends('layouts.app')

@section('content')

<div class="login-box">
<form method="POST" action="{{ route('login.custom') }}">

@csrf
	<h1> Login </h1>
  <div class="textbox" >
  	<i class="fas fa-user" aria-hidden="true"></i>
   <input type="email" placeholder="Email" name="Email" id="email">
</div>
   
   <div class="textbox" >
   	<i class="fas fa-lock" aria-hidden="true"></i>
	<input type="password" placeholder="password" name="password" id="password">
</div>

     
<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

    

</div>   
</form> 



@endsection
