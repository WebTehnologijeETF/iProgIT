
<br>
<?php
		$id=$_GET['Id'];

			 $veza = new PDO("mysql:dbname=baza;host=localhost;charset=utf8", "amer", "amer123");
     $veza->exec("set names utf8");
$rezultat = $veza->query("select id, autor, tekst, novost,email, datum vrijeme2 from komentari order by datum desc");   
  if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

   $prikazi="";

	$x = 1;

     foreach ($rezultat as $komentari) {
     	if($komentari['novost']==$id)
     	{
     		if ($x==1)
		{
		 $prikazi= $prikazi.'<ul class="kom_Lista"> <li>'.$komentari['autor']."</li> <small>".$komentari['vrijeme2']."</small><br><br>".$komentari['tekst']."</ul>";
			$x=2;
		}
     			else
       $prikazi= $prikazi.'<br><hr><br> <ul class="kom_Lista"> <li>'.$komentari['autor']."</li> <small>".$komentari['vrijeme2']."</small><br><br>".$komentari['tekst']."</ul>";
}
        }
	     echo $prikazi;

?>