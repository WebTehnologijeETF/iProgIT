<?php
		
	$idNovosti=$_GET['Id'];
	$Name=$_GET['Name'];
	$Email=$_GET['Email'];
	$Tekst=$_GET['Tekst'];
  $anonimus="Anoniman";
	$Name = htmlEntities($_GET['Name'], ENT_QUOTES);
  	$Email = htmlEntities($_GET['Email'], ENT_QUOTES);
  	$Tekst = htmlEntities($_GET['Tekst'], ENT_QUOTES);
 $veza = new PDO("mysql:dbname=baza;host=localhost;charset=utf8", "amer", "amer123");
     $veza->exec("set names utf8");
     if($Name=="")
    $x = $veza->query("INSERT INTO komentari SET novost='".$idNovosti."', email='nesto', tekst='".$Tekst."', autor='".$anonimus."'" ); 
else
 $x = $veza->query("INSERT INTO komentari SET novost='".$idNovosti."', email='nesto', tekst='".$Tekst."', autor='".$Name."'" ); 
if (!$x) {
 $greska = $veza->errorInfo(); 
  print "SQL greška: " . $greska[2]; exit(); } 

   	echo "Uspješno ste dodali komentar!";
   	
  ?>