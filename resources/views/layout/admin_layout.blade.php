<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

 <style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background: url("err.jpg") no-repeat;
}
/*nav bar*/
.sidebar {
height: 100vh;
background-color: #ABABA0  ;

background-position: center;
background-repeat: no-repeat;
background-size: cover;
box-shadow:black;
}
.bottom-border {
border-bottom: 5px dotted white;
}
.sidebar-link{
    transition: all .4s;
}
.sidebar-link:hover{
    background-color:#C62828;
    border-radius: 5px;
}
.edit-btn, .add-btn {
	background: black;
	border: 1px solid #03bfbc;
	padding : 10px 10px;
	color: white;
	border-radius: 5px;
	font-family: Montserrat, sans-serif;
	cursor: pointer;
	
}
.about{
	margin-top: 20px;
	line-height: 19px;
	text-align: center;
	color: white;
}
.current{
    background-color:#B71C1C;
    border-radius: 8px;
    box-shadow: 2px 5px 5px white;
    transition: all .3s;
}
.current:hover{
    background-color:#C62828;
    border-radius: 8px;
    box-shadow: 2px 5px 5px white;
    transform: transform: translateY(-1px);
}
.top-bar {
background-color: #ABABA0   ;
}
/*input:placeholder{
    color: white;
    opacity: 1;
}*/
.search-input{
    background: transparent;
    border: none;
    border-radius: 0;
    border-bottom:2px solid white;
    transition: all .4s;
}
.search-input:focus{
    background: transparent;
    box-shadow: none;
    border-bottom: 2px solid white;
}
.search-button{
    border-radius: 50%;
    padding: 10px 16px;  
    transition: all .4s; 
}
.search-button:hover {
    background-color: white;
    transform: translateY(-1px);
}
.icon-parent{
position: relative;
}
.icon-bullet ::after{
    content: "";
    position: absolute;
    top: 7px;
    left: 15px;
    height: 12px;
    width: 12px;
    background-color:#B71C1C;
border-radius: 50%;
}
@media (max-width: 768px){
    .sidebar {
        position: static;
        height: auto;
    }
    .top-nav{
        position: static;
    }
}
/*Cards*/
.card-common{
    box-shadow: 1px 2px 5px gray;
   transition: all .4s; 
}
.card-common:hover {
    box-shadow: 2px 3px 15px gray;
    transform: translateY(-1px);
}
/*End of cards*/

.card-body{
    background : #E7E8F2 ;
}
/*task list*/
.task-border{
    border-left: 3px solid #3499DB;
}

.bg-1{
    background-color: transparent;
    color: white;
}
.bg-2{
background-color: transparent;
color: white ;
}
.bg-3{
    background-color: transparent;
    color: white;
}
.bg-4{
    background-color: transparent;
    color: white;
}
/*End of task list*/
.bg-button{
  background:  #3499DB ;
}
.bd-bottom{
    border-bottom: 6px solid white;
}
input.form-control{
    color: white;
}


       

       
    
  



 </style>  
</head>
  <body>
     <!---Nav bar-->
      <nav class="navbar navbar-expand-md navbar-light">
<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" 
data-toggle="collapse" data-target="#navbar">
<span class="navbar-toggler-icon"></span>

</button>
<div class="collapse navbar-collapse" id="navbar">
    <div class="container-fluid">
        <div class="row">
            <!---Sidebar-->
            <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                
                <div class="bottom-border pb-3">
                    <img src="kl.jpg" width="90" class="rounded-circle mr-3">
                    <a href="#" class="text-white ">ADMIN</a>
                    <p class="about">E-Shop Administrators are<br>expected to be strong<br>
         leaders with<br>
        superb administrative and<br>
         record keeping skills.
        </p>  
        <button class="edit-btn">EDIT</button>
        <button class="add-btn"><a href="/admin/email" > EMAIL</a></button>
                </div>
                <ul class="navbar-nav flex-column mt-4">
                   <li class="nav-item"><a href="/admin" class="nav-link text-white p-3 mb-2
                    current"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Home</a></li>
               
                <li class="nav-item"><a href="/produit" class="nav-link text-white p-3 mb-2
                	sidebar-link"><i class="fas fa-laptop"></i>
                Laptops</a></li>
                 <li class="nav-item"><a href="/admin/accesorys" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-headset"></i>
                Accessories</a></li>
                    
                <li class="nav-item"><a href="/admin/build" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-wrench"></i>
                Build Computer</a></li>    
                
               
                </ul>

            </div>
            <!---end of side bar-->
            <!---Top Nav-->
<div class="col-xl-10 col-lg-9 col-md-8 ml-auto top-bar fixed-top py-2 top-nav">
    <div class="row align-item-center">
   <div class="col-md-4">
 <h4 class="text-light text-uppercase mb-0">WELCOME</h4>
   </div>
   <div class="col-md-5">
<form>
    <div class="input-group">
        <input type="text" class="form-control search-input" placeholder="search">
        <button type="button" class="btn btn-white search-button">
            <i class="fas fa-search text-dark"></i>
        </button>
    </div>
</form>
   </div>
   <div class="col-md-3">
       <ul class="navbar-nav">
           <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
            <i class="fas fa-comments text-light fa-lg"></i></a>
            <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
             <i class="fas fa-bell text-light fa-lg"></i></a>
             <li class="nav-item ml-md-auto"><a href="#"class="nav-link"
            data-toggle="modal" data-target="#sign-out">
             <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
       </ul>
   </div>
        </div>
</div>
            <!---End of Top Nav-->
        </div>
    </div>
</div>
      </nav>
      <!----End of Navbar-->
      <!---Modal-->
      <div class="modal" id="sign-out">
          <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Signout</h4>
                <button type="button" class="close" data-dismiss="modal"
                 >&times;</button>
                </div>  
                <div class="modal-body">
                    do you want to leave ?
                    <a href="/logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </div>
              </div>
          </div>
      </div>

      <div class="container-fluid">
     <div class="row">
         <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
             <div class="row pt-md-5 mt-md-3 mb-5">
                 <div class="col-xl-3 col-sm-6 p-2">

                 <div id="page">
      @yield('home')
      @yield('product')
      @yield('accesorys')
      @yield('build')
      @yield('email')
      </div></div></div></div></div>
<!----Footer-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>