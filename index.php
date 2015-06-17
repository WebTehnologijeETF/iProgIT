<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <link rel="shortcut icon" href="favicon5.ico">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

      <title> iProgIT Obrazovni centar</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<script src="funkcije.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">

  </head>
  <body >

 <div id="wrapper" >
	<div id="header" onclick="Sakrij()"> <img id="icon" src="icon.png" >
	<br>
     <pre id="naslov" > iProgIT</pre> 
	</div>

	<nav >
	<ul id="lista">
		<li><a href="index.php" >Home</a></li>
		<li><a   onclick="Zasto()">Zašto iProgIT</a>
			<ul id = "kursevi">
			
			</ul>
		</li>
		<li><a href="#" onclick="Prikazi2()">Obrazovni centri</a>
			<ul id="partneri">
				<li><a href="http://ivora.hr/obrazovni-centar-zagreb.html">Zagreb</a></li>
				<li><a href="http://www.nadji.info/rs/it-centar-skola-racunara-pariske-komune-beograd/ve26892/">Beograd</a></li>
			</ul>
		</li>
		<li><a onclick="Utisci()">Utisci</a></li>
		<li><a  onclick="Onama()">O nama</a></li>
		
	</ul>
</nav>


	<div id="content" onclick="Sakrij()">
		<div id="content-left">
			
<div class="menu">
                        <a class="menu" href="index.php"> Najnovije </a>
                        <a class="menu" onclick="Kursevi()"> Kursevi </a>
                        <a  class="menu" onclick="Partneri()"> Partneri </a>
                        <a class="menu" onclick="Kontakt()"> Kontakt </a>
                     </div>

		</div>

		<div id="content-main">
			 <p class = "desc">
<?php
			include 'Novosti.php'
?>
</p>





			<div id="div_content" >
			<ul id="listaa">
			<?php 
				echo $prikazi;
				?>
				</ul>
				</div>

	</div>
	<div id="footer"> <center>Web Tehnologije 2015. </center></div>

	

  </body>

</html>
