@extends('layouts.client')

@section('home')


<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="/laptops">Laptops</a></div>
        <div class="panel-body"><img src="storage\laptop-10763.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy the best laptops in the market</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="/laptops">Accesorys</a></div>
        <div class="panel-body"><img src="storage\Gaming-Headset-PNG-Clipart.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy best accesorys with best price</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading"><a href="/laptops">Build a desktop</a></div>
        <div class="panel-body"><img src="storage\desktop1.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">lets start building awsome setup</div>
      </div>
    </div>
  </div>
</div><br>
@endsection