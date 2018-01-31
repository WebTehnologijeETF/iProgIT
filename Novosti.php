<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="funkcije.js"></script>

      <title>Tutorijal 8, Uvod</title>
   </head>
   <body>
      <?php
         $prikazi ="";
         $veza = new PDO("mysql:dbname=baza;host=localhost;charset=utf8", "amer", "amer123");
         $veza->exec("set names utf8");
         $rezultat = $veza->query("select id, autor, naslov,tekst, detaljno,slika, datum vrijeme2 from novosti order by datum desc");   
         if (!$rezultat) {
             $greska = $veza->errorInfo();
             print "SQL greška: " . $greska[2];
             exit();
         }
         
         
         foreach ($rezultat as $novosti) {
              $x = $veza->query("select  count(*) broj from komentari k where k.novost=".$novosti['id']." order by k.datum desc");   
              
             $id=$novosti['id'];
         
         
               foreach ($x as $red) {
                if($red['broj']!=0)
             {
                 if($novosti['slika']=="")
         
                         {
                 if($novosti['detaljno']=="")
                           $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc">'."<br>".$novosti['tekst'].'</p> <br> '.'<br><br></div> 
                          <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
                     else
                          $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc">'."<br>".$novosti['tekst'].'</p> <br> 
                         <a href="#" id="example-show" class="showLink" onclick="Detaljno('.$id.');"> Opširnije</a>'.'<br><br></div> 
                          <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
                    
         
                     }
                 else
                 {
                 if($novosti['detaljno']=="")
                     $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'</p> <br> 
                         '.'<br><br></div> 
                          <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
                 else
                    $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'</p> <br> 
                         <a href="#" id="example-show" class="showLink" onclick="Detaljno('.$id.');"> Opširnije</a>'.'<br><br></div> 
                          <div class="komentarii" id="Koment'.$id.'"><a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].' komentara</a> </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
             
                 }
                 
             }
             else
                        // $prikazi= $prikazi."<small>".$novosti['vrijeme2']."</small>"."<h1>".$novosti['naslov']."</h1><h3> ".$novosti['tekst'].'<br><small >Nema komentara</small> <br><br>';
              {
                 if($novosti['slika']=="")
         
                    {    
                 if($novosti['detaljno']=="")
         
                         $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc">'."<br>".$novosti['tekst'].'</p> <br> 
                        '.'<br><br></div> 
                          <div  class="komentarii" id="Koment'.$id.'">Nema komentara</div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
                     else
         
                         $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc">'."<br>".$novosti['tekst'].'</p> <br> 
                         <a href="#" id="example-show" class="showLink" onclick="Detaljno('.$id.');"> Opširnije</a>'.'<br><br></div> 
                          <div  class="komentarii" id="Koment'.$id.'">Nema komentara</div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
                   
         
                } else
                {
                 if($novosti['detaljno']=="")
                     $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'</p> <br> 
                         <a class="komentarii" id="Koment'.$id.'">Nema komentara </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
               else
                      $prikazi= $prikazi.'<div id="div_content2" > <h1>'.$novosti['naslov']."<br><h5>".$novosti['vrijeme2']." ".$novosti['autor'].'</h5> 
                         <p class = "desc"><img id="slika1" alt="Sarajevo" src='.$novosti['slika']."> <br>".$novosti['tekst'].'</p> <br> 
                         <a href="#" id="example-show" class="showLink" onclick="Detaljno('.$id.');"> Opširnije</a>'.'<br><br></div>  
                         <a class="komentarii" id="Koment'.$id.'">Nema komentara </div> <br><br>
                          <button> <a onClick="OstaviKomentar('.$id.')"> Ostavi Komentar </a> </button> <br><br><br><br> <br> ';
              
               }
             }
         }
         }
         
         
          
         ?>
   </body>
</html>