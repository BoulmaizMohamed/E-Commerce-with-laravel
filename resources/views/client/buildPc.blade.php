@extends('layouts.client')

@section('build')






<section>

<form action="/CLIENT/BUILD" method="post">

@csrf
<p>chose your motherboard:</p>

<input type="radio" name="mother" value="ASUS Prime Z590-P LGA 1200" onclick="myFunction()">Gigabyte GA-A320M-S2H ------low price<br>
<input type="radio" name="mother" value="GIGABYTE B450M DS3H V2" onclick="myFunction1()">ASRock B560M-ITX/ac -------mid price<br>
<input type="radio" name="mother" value="ROG Strix Z590-E Gaming" onclick="myFunction2()">MSI MEG X570 UNIFY------ hight price</br>

<div id="RAM">
chose your RAM  :<br>
<br><br><br>
<input type="radio" name="RAM" value="RAM2GB" >2 GB----7<br>
<input type="radio" name="RAM" value="RAM4GB" >4 GB----13<br>
<input type="radio" name="RAM" value="RAM8GB" >8 GB----20<br>

</div>

<div id="RAM1">
chose your RAM  :<br>
<br><br><br>
<input type="radio" name="RAM" value="RAM8GB" >8 GB----20<br>
<input type="radio" name="RAM" value="RAM16GB" >16 GB----30<br>
<input type="radio" name="RAM" value="RAM32GB" >32 GB----50<br>

</div>

<div id="RAM2">
chose your RAM  :<br>
<br><br><br>
<input type="radio" name="RAM" value="RAM16GB" >16 GB----30<br>
<input type="radio" name="RAM" value="RAM32GB" >32 GB----50<br>
<input type="radio" name="RAM" value="RAM64GB" >64 GB----64<br>

</div>

<div id="DISK">
chose your HARDDISK :<br>
<br><br><br>
<input type="radio" name="DISK" value="HDD128GB" >HDD 128 GB----10<br>
<input type="radio" name="DISK" value="HDD256GB" >HDD 256 GB----15<br>
<input type="radio" name="DISK" value="HDD512GB" >HDD 512 GB----22<br>

</div>

<div id="DISK1">
chose your HARDDISK :<br>
<br><br><br>
<input type="radio" name="DISK" value="HDD1TB" >HDD 1 TB----40<br>
<input type="radio" name="DISK" value="SSD512GB" >SSD 512 GB----41<br>
<input type="radio" name="DISK" value="SSD1TB" >SSD 1 TB----80<br>

</div>


<div id="DISK2">
chose your HARDDISK :<br>
<br><br><br>
<input type="radio" name="DISK" value="SSD1TB" >SSD 1 TB----80<br>
<input type="radio" name="DISK" value="SSD2TB" >SSD 2 TB----100<br>
<input type="radio" name="DISK" value="SSD4TB" >SSD 4 TB----125<br>

</div>




<div id="myDIV">
chose your CPU :<br>
<br><br><br>
<input type="radio" name="CPU" value="Intel Core i3-3250" onclick="myFunction10()">Intel Core i3-3250----30<br>
<input type="radio" name="CPU" value="Intel Pentium E6600" onclick="myFunction11()">Intel Pentium E6600----28<br>
<input type="radio" name="CPU" value="AMD Athlon II X4 620" onclick="myFunction12()">AMD Athlon II X4 620----40<br>

</div>




<div id="myDIV1">
chose your CPU:<br><br><br><br>
<input type="radio" name="CPU" value="Intel Core i3-10100" onclick="myFunction20()">Intel Core i3-10100------130<br>
<input type="radio" name="CPU" value="Intel Core i5-10400F" onclick="myFunction23()">Intel Core i5-10400F-----160<br>
<input type="radio" name="CPU" value="AMD Ryzen 5 3600" onclick="myFunction27()">AMD Ryzen 5 3600-------162<br>

</div>

<div id="myDIV2">
chose your CPU:<br><br><br><br>
<input type="radio" name="CPU" value="AMD Ryzen 7 5800X" onclick="myFunction30()">AMD Ryzen 7 5800X ------409<br>
<input type="radio" name="CPU" value="Intel Core i7-10700K" onclick="myFunction33()">Intel Core i7-10700K----315<br>
<input type="radio" name="CPU" value="Nvidia" onclick="myFunction37()">Intel Core i9-10900K------478<br>
</div>

<br><br><br><br>
<div id="myDIV10">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="MSI GT 710 1GD3H LP" >MSI GT 710 1GD3H LP ------72<br>
<input type="radio" name="GPU" value="AMD FirePro W5000" >AMD FirePro W5000----99<br>
</div>

<br><br><br><br>
<div id="myDIV11">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="ATI FirePro 2270" >ATI FirePro 2270 ------99<br>
<input type="radio" name="GPU" value="Dell 469-4186" >Dell 469-4186----99<br>
</div>


<div id="myDIV12">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="AMD Ryzen 7 5800X" >MSI GT 710 1GD3H LP ------72<br>
<input type="radio" name="GPU" value="AMD FirePro W5000" >AMD FirePro W5000----99<br>
</div>

<br><br><br><br>
<div id="myDIV20">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="GTX960M" >GTX960M ------120<br>
<input type="radio" name="GPU" value="GTX1050TI" >GTX1050TI----250<br>
</div>

<br><br><br><br>
<div id="myDIV23">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="AMD Ryzen 7 5800X" >GTX1060TI ------290<br>
<input type="radio" name="GPU" value="AMD FirePro W5000" >1080----350<br>
</div>

<br><br><br><br>
<div id="myDIV27">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="VEGA 8" >VEGA 8 ------240<br>
<input type="radio" name="GPU" value="GTX 1050" >GTX 1050----220<br>
</div>

<br><br><br><br>
<div id="myDIV30">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="VEGA 8">VEGA 11 ------490<br>
<input type="radio" name="GPU" value="GTX 1050" >RTX 2050----600<br>
</div>

<br><br><br><br>
<div id="myDIV33">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="VEGA 8" >RTX 2050 ------600<br>
<input type="radio" name="GPU" value="GTX 1050" >RTX 2090----720<br>
</div>

<br><br><br><br>
<div id="myDIV37">
chose your Vedio card:<br><br><br><br>
<input type="radio" name="GPU" value="VEGA 8" >VEGA 8 ------240<br>
<input type="radio" name="GPU" value="GTX 1050" >GTX 1050----220<br>
</div>

<button type="submit">Submit</button>


</form>


</section>
</br>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var a = document.getElementById("myDIV1");
  var b = document.getElementById("myDIV2");
  var C = document.getElementById("RAM");
  var D = document.getElementById("RAM1");
  var E = document.getElementById("RAM2");
  var F = document.getElementById("DISK");
  var G = document.getElementById("DISK1");
  var H = document.getElementById("DISK2");
  if (x.style.display === "block") {
    x.style.display = "none";
    C.style.display = "none";
    F.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
    D.style.display = "block";
    E.style.display = "block";
    G.style.display = "block";
    H.style.display = "block";
  } else {
    x.style.display = "block";
    C.style.display = "block";
    F.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
    D.style.display = "none";
    E.style.display = "none";
    G.style.display = "none";
    H.style.display = "none";
  }
}



function myFunction1() {
  var x = document.getElementById("myDIV1");
  var a = document.getElementById("myDIV");
  var b = document.getElementById("myDIV2");
  var C = document.getElementById("RAM");
  var D = document.getElementById("RAM1");
  var E = document.getElementById("RAM2");
  var F = document.getElementById("DISK");
  var G = document.getElementById("DISK1");
  var H = document.getElementById("DISK2");
  if (x.style.display === "block") {
    x.style.display = "none";
    D.style.display = "none";
    G.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
    C.style.display = "block";
    E.style.display = "block";
    F.style.display = "block";
    H.style.display = "block";
    
  } else {
    x.style.display = "block";
    D.style.display = "block";
    G.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
    C.style.display = "none";
    E.style.display = "none";
    F.style.display = "none";
    H.style.display = "none";
  
  }
}

function myFunction2() {
  var x = document.getElementById("myDIV2");
  var a = document.getElementById("myDIV1");
  var b = document.getElementById("myDIV");
  var C = document.getElementById("RAM");
  var D = document.getElementById("RAM1");
  var E = document.getElementById("RAM2");
  var F = document.getElementById("DISK");
  var G = document.getElementById("DISK1");
  var H = document.getElementById("DISK2");
  if (x.style.display === "block") {
    x.style.display = "none";
    E.style.display = "none";
    H.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
    C.style.display = "block";
    D.style.display = "block";
    F.style.display = "block";
    G.style.display = "block";
  } else {
    x.style.display = "block";
    E.style.display = "block";
    H.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
    C.style.display = "none";
    D.style.display = "none";
    F.style.display = "none";
    G.style.display = "none";
  }
}

function myFunction10() {
  var x = document.getElementById("myDIV10");
  var a = document.getElementById("myDIV11");
  var b = document.getElementById("myDIV12");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}


function myFunction11() {
  var x = document.getElementById("myDIV11");
  var a = document.getElementById("myDIV10");
  var b = document.getElementById("myDIV12");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}



function myFunction12() {
  var x = document.getElementById("myDIV12");
  var a = document.getElementById("myDIV11");
  var b = document.getElementById("myDIV10");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}


function myFunction20() {
  var x = document.getElementById("myDIV20");
  var a = document.getElementById("myDIV23");
  var b = document.getElementById("myDIV27");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}



function myFunction23() {
  var x = document.getElementById("myDIV23");
  var a = document.getElementById("myDIV20");
  var b = document.getElementById("myDIV27");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}




function myFunction27() {
  var x = document.getElementById("myDIV27");
  var a = document.getElementById("myDIV20");
  var b = document.getElementById("myDIV23");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}



function myFunction30() {
  var x = document.getElementById("myDIV30");
  var a = document.getElementById("myDIV33");
  var b = document.getElementById("myDIV37");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}




function myFunction33() {
  var x = document.getElementById("myDIV27");
  var a = document.getElementById("myDIV20");
  var b = document.getElementById("myDIV23");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}


function myFunction37() {
  var x = document.getElementById("myDIV37");
  var a = document.getElementById("myDIV30");
  var b = document.getElementById("myDIV33");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.display = "block";
    b.style.display = "block";
  } else {
    x.style.display = "block";
    a.style.display = "none";
    b.style.display = "none";
  }
}



</script>








  @endsection