<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <link rel="shortcut icon" href="favicon5.ico">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

      <title> iProgIT Obrazovni centar</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="style.css" type="text/css">
    <script>


function provjeri()
{
   var z = document.getElementById('ime');
   var letters = /^[A-Za-zÀ-ú]+ [A-Za-zÀ-ú]+$/;  
   if(z.value.match(letters))  
     {  }  
   else  
     {  
     alert("Ime se mora sastojati od imena i prezimena i samo od slova !");  
     } 
     provjeri2(); 
}
function provjeri2()
{
   var k = document.getElementById('mail').value;
  
   var i=0,j=0;
  
   for(i=0;i<k.length;i++)
   {
    if(k[i]=="@")
      j++;
   }
   if(j==0)
    alert("Email mora sadržavati '@'");
    if(j>1)
    alert("Email mora sadržavati tačno jedno '@'");

}
    </script>
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
ini_set("SMTP", "webmail.etf.unsa.ba");
ini_set("smtp_port", "25");
ini_set("sendmail_from", "aratkovic2@etf.unsa.ba");
   $name = $_POST["name"];
   $Email = $_POST["email"];
   $poruka = $_POST["tekst"];
  $sub = $_POST['semail'];


$Name =  $name; //senders name 
$email = $Email; //senders e-mail adress 
$recipient = "vljubovic@etf.unsa.ba"; //recipient 
$mail_body = $poruka; //mail body 
$subject = $sub; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

if (mail($recipient, $subject, $mail_body, $header))
echo "Zahvaljujemo se što ste nas kontaktirali";
else
  echo "Poruka nije poslana!" //mail command :) 

?> 



    </div>
  </div>
  <div id="footer"> <center>Web Tehnologije 2015. </center></div>

  

  </body>

</html>
