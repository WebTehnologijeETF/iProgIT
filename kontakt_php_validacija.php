<?php
// define variables and set to empty values
$nameErr = $emailErr = $gradErr = $pbrojErr = $subjErr= "";
$name = $email2Err= $email=$forma = $grad = $komentar = $pbroj = $semail= $email2= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$validacija = true;
   if (empty($_POST["name"])) {
     $nameErr = "Polje 'Ime i Prezime' ne smije biti prazno!";
     $validacija = false;

   } else {
   	 
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Samo slova i razmaci su dozvoljeni!"; 
            $validacija = false;

     }
   }


   if (empty($_POST["email"])) {
     $emailErr = "Email je potreban!";
                 $validacija = false;


   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Netačan email format!"; 
                   $validacija = false;

     }
   }
   
    if (empty($_POST["email2"])) {
     $email2Err = "Email je potreban!";
                 $validacija = false;

   } else {
     $email2 = test_input($_POST["email2"]);
  if($email2 != $email)
  	{ $email2Err = "Email-ovi moraju biti isti!"; 
                   $validacija = false;}
     
   }

   if (empty($_POST["grad"])) {
     $gradErr = "Grad ne smije biti prazan!";
                 $validacija = false;

   } else {
     $grad = test_input($_POST["grad"]);
  
     
   }
   if (empty($_POST["pbroj"])) {
     $pbrojErr = "Postancki broj ne smije biti prazan!";
                 $validacija = false;

   } else {

     $pbroj = test_input($_POST["pbroj"]);
      if (!is_numeric($pbroj)) 
                {
  $pbrojErr = "Postacki broj se mora sastojati od brojeva!";
                 $validacija = false;

}
     
   }

  
     $komentar = test_input($_POST["komentar"]);
   
    if (empty($_POST["semail"])) {

     $subjErr = "Polje Subject ne smije biti prazno!";
                 $validacija = false;

   } else {
     $semail = test_input($_POST["semail"]);
   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if($validacija == true)
$forma='formOK.php';
else
$forma='formNotOK.php';

?>