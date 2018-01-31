<?php
		$id=$_GET['Id'];

			 $veza = new PDO("mysql:dbname=baza;host=localhost;charset=utf8", "amer", "amer123");
     $veza->exec("set names utf8");
$rezultat = $veza->query("select id, autor, naslov,tekst, detaljno,slika, datum vrijeme2 from novosti where id=".$id);   
  if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

$rezultat2 = $veza->query("select id, autor, tekst, novost,email, UNIX_TIMESTAMP(datum) vrijeme2 from komentari order by datum desc");   
  if (!$rezultat2) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

   $prikazi="";
     foreach ($rezultat as $novosti) {
           $x = $veza->query("select  count(*) broj from komentari k where k.novost=".$id." order by k.datum desc");   
          
         


            foreach ($x as $red) {
             if($red['broj']!=0)
          {

                   if($novosti['slika']=="")

                      $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                      <p class = "desc">'."<br>".$novosti['tekst'].'<br>'.$novosti['detaljno']. 
                      '</p><br><br></div> 
                       <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                       <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';

              else
                  $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                      <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'<br>'.$novosti['detaljno']. 
                      '</p><br><br></div> 
                       <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                       <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
     
        }

          
          else
          {
                    if($novosti['slika']=="")

                      $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                      <p class = "desc">'."<br>".$novosti['tekst'].'<br>'.$novosti['detaljno']. 
                      '</p><br><br></div> 
                       <div class="komentarii" id="Koment'.$id.'">Nema komentara</div> <br><br>
                       <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';

              else
                  $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                      <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'<br>'.$novosti['detaljno']. 
                      '</p><br><br></div> 
                       <div class="komentarii" id="Koment'.$id.'">Nema komentara </div> <br><br>
                       <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
              }
     }
}
     

	     echo $prikazi;

?>