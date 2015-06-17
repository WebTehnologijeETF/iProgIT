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

function Kursevi(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "kursevi.php" , true);
         ajax.send();
         }

         function Partneri(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "partneri.php" , true);
         ajax.send();
         }

          function Kontakt(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "kontakt.php" , true);
         ajax.send();
         }

 function Zasto(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "zasto.php" , true);
         ajax.send();
         }


 function Utisci(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "utisci.php" , true);
         ajax.send();
         }

          function Onama(){
         var ajax;
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("div_content").innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("div_content").innerHTML = "Greska: nepoznat URL";
         };
         ajax.open("GET", "onama.php" , true);
         ajax.send();
         }

  function OtvaranjeKomentara(id)
         {
         var xmlhttp;
         if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp=new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.onreadystatechange=function()
         {
           var x = id.toString();
         if (xmlhttp.readyState==4 && xmlhttp.status==200)
           {
           document.getElementById("Koment"+x).innerHTML=xmlhttp.responseText;
           }
         }
         // var string="index.php?"+"id="+str;
         xmlhttp.open("GET", "dajKomentar.php?Id="+id+"", true);
         xmlhttp.send();
         }
         
         function OstaviKomentar(id)
         {
         var xmlhttp;
         if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp=new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.onreadystatechange=function()
         {
               var x = id.toString();
         
         if (xmlhttp.readyState==4 && xmlhttp.status==200)
           {
           document.getElementById("Koment"+x).innerHTML=xmlhttp.responseText;
           }
         }
         // var string="index.php?"+"id="+str;
         xmlhttp.open("GET", "OstaviKomentarForma.php?Id="+id+"", true);
         xmlhttp.send();
         }
         
         
         function Komentar(id){
         var ajax;
         var name=document.getElementById("name").value;
         var email=document.getElementById("email").value;
         var tekst=document.getElementById("text").value;
             var x = id.toString();
         
         name = encodeURIComponent(name);
         email = encodeURIComponent(email);
         tekst = encodeURIComponent(tekst);
         if (window.XMLHttpRequest)
           {//code for IE7+, Firefox, Chrome, Opera, Safari
           ajax=new XMLHttpRequest();
           } 
         else
           {// code for IE6, IE5
           ajax=new ActiveXObject("Microsoft.XMLHTTP");
           } 
         ajax.onreadystatechange = function() {// Anonimna funkcija
         
           if (ajax.readyState == 4 && ajax.status == 200)
             document.getElementById("Koment"+x).innerHTML = ajax.responseText;
           if (ajax.readyState == 4 && ajax.status == 404)
             document.getElementById("Koment"+x).innerHTML = "Greska: nepoznat URL";
         };
         var link="OstaviKomentar.php?Id="+id+"&Name="+name+"&Email="+email+"&Tekst="+ tekst+"";
         ajax.open("GET", link , true);
         ajax.send();
         }
         
         
         function Detaljno(id){
         var xmlhttp;
         if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp=new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.onreadystatechange=function()
         {
         if (xmlhttp.readyState==4 && xmlhttp.status==200)
           {
           document.getElementById("div_content").innerHTML=xmlhttp.responseText;
           }
         }
         // var string="index.php?"+"id="+str;
         xmlhttp.open("GET", "novost.php?Id="+id+"", true);
         xmlhttp.send();
         }
         
