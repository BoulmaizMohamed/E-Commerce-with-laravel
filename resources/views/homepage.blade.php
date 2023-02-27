<!DOCTYPE html>
<html lang="en">
<head>
  <title>online shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.0/components/card"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Store</h1>      
    <p>Laptops, Acessorys & Desktops</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/laptops">Laptops</a></li>
        <li><a href="/Accesorys">Accesorys</a></li>
        <li><a href="/build">desktop builder</a></li>
        <li><a href="/CONTACT">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/reg"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="/login"><span class="glyphicon glyphicon-user"></span> login</a></li>
      </ul>
    </div>
  </div>
</nav>

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




<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
