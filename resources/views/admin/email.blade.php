@extends('layout.admin_layout')

@section('email')
<div style="weight:100%;">

<ul>

@foreach($email as $email)

<li><p style="color:red;">email:<p>{{$email->email}}<br> 
<p style="color:red;">message:<p><br>{{ $email ->message  }}</li>

<br><br><br>
@endforeach



</ul>



<div>

@endsection