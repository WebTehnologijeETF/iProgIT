<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <link rel="shortcut icon" href="favicon5.ico">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

      <title> iProgIT Obrazovni centar</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="style.css" type="text/css">

    <script >
    function showHide(shID) {
  if (document.getElementById(shID)) {
    if (document.getElementById(shID+'-show').style.display != 'none') {
      document.getElementById(shID+'-show').style.display = 'none';
      document.getElementById(shID).style.display = 'block';
    }
    else {
      document.getElementById(shID+'-show').style.display = 'inline';
      document.getElementById(shID).style.display = 'none';
    }
  }
}</script>
   <script>
   window.onload = function () {
  var z = document.getElementById('kursevi');
z.style.display="block"; 
z.style.display="none"; 
var k = document.getElementById('partneri');
k.style.display="block"; 
k.style.display="none"; 
}

function Prikazi1(){
var z = document.getElementById('kursevi');
 var k = document.getElementById('partneri');
   k.style.display="none"; 
if(z.style.display=="none")
  z.style.display="block"; 
else
    z.style.display="none"; 


}
function Prikazi2(){
  var z = document.getElementById('partneri');
   var k = document.getElementById('kursevi');
   k.style.display="none"; 
if(z.style.display=="none")
  z.style.display="block"; 
else
    z.style.display="none"; 

}
function Sakrij(){
 var z = document.getElementById('partneri');
 var k = document.getElementById('kursevi');
   k.style.display="none"; 
    z.style.display="none"; 

}
   </script>

  </head>
  <body >

 <div id="wrapper" >
  <div id="header" onclick="Sakrij()"> <img id="icon" src="icon.png" >
  <br>
     <pre id="naslov" > iProgIT</pre> 
  </div>

  <nav >
  <ul id="lista">
    <li><a href="index.html" onclick="Sakrij()">Home</a></li>
    <li><a href="zasto.html"  onclick="Prikazi1()">Zašto iProgIT</a>
      <ul id = "kursevi">
      
      </ul>
    </li>
    <li><a href="#" onclick="Prikazi2()">Obrazovni centri</a>
      <ul id="partneri">
        <li><a href="http://ivora.hr/obrazovni-centar-zagreb.html">Zagreb</a></li>
        <li><a href="http://www.nadji.info/rs/it-centar-skola-racunara-pariske-komune-beograd/ve26892/">Beograd</a></li>
      </ul>
    </li>
    <li><a href="utisci.html" onclick="Sakrij()">Utisci</a></li>
    <li><a href="about.html" onclick="Sakrij()">O nama</a></li>
    
  </ul>
</nav>

<?php 
        include 'kontakt_php_validacija.php'
    ?>
  <div id="content" onclick="Sakrij()">
    <div id="content-left">
      

 

<div class="menu">
                        <a class="menu" href="index.html"> Najnovije </a>
                        <a class="menu" href="kursevi.html"> Kursevi </a>
                        <a  class="menu" href="partneri.html"> Partneri </a>
                        <a class="menu" href="kontakt.html"> Kontakt </a>
                     </div>

    </div>

    <div id="content-main">
      
      <div id="div_content" >
                 <?php 
                   include $forma;
                ?>   



    </div>
  </div>
  <div id="footer"> <center>Web Tehnologije 2015. </center></div>

  

  </body>

</html>
