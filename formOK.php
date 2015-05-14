<fieldset>
    <h3>Provjerite da li ste ispravno popunili kontakt formu</h3>
    <br>
    <?php print "Ime i prezime: " .$name ?>
    <br><br>
    <?php print "Grad: " .$grad ?>
    <br><br>
    <?php print "Poštanski broj: " .$pbroj ?>
    <br><br>
    <?php print "Email: " .$email ?>
    <br><br>
    <?php print "Subject: " .$semail ?>
    <br><br>
    <?php print "Poruka: " .$komentar ?>
    <br><br>

    <h3>Da li ste sigurni da želite poslati ove podatke?</h3>
    <form method="post" name = "mail" action="posalji_mail.php">
        <input type="submit" name="send" value="Siguran sam">

        <input type="hidden" name="name" value="<?php echo $name;?>">

        <input type="hidden" name="email" value="<?php echo $email;?>">

        <input type="hidden" name="semail" value="<?php echo $semail;?>">

        <input type="hidden" name="tekst" value="<?php echo $komentar;?>">
    </form>

</fieldset>
    <h3>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke</h3>

 <form method="post" class="forma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
      
              <p class="desc3">  <label >Ime i prezime</label></p>

      <p class="desc3"><input type="text" name="name" value="<?php echo $name;?>" id="ime" /> 
          <span class="error">* <?php echo $nameErr;?></span>
<br><br>

  <p class="desc3">  <label for="mjesto" >Grad</label></p>

      <p class="desc3"><input type="text" name="grad" value="<?php echo $grad;?>" id="mjesto" /> <br> <br>
       <p class="desc3">  <label for="Pbroj" >Postanski broj</label></p>

      <p class="desc3"><input type="text" name="pbroj" id="pbroj" value="<?php echo $pbroj;?>" /> <br><br>

      <label for="email">Email</label></p>
      <p class="desc3"><input type="email" name="email" id="mail1" value="<?php echo $email;?>" /> <br><br>
       <label for="email">Ponovite Email</label></p>
      <p class="desc3"><input type="email" name="email2" id="mail2"value="<?php echo $email;?>"  /> <br><br>
       <label for="semail">Subject email-a</label></p>
      <p class="desc3"><input type="text" name="semail" id="mail3" value="<?php echo $semail;?>"required /> <br><br>

   <label for="text">Komentar</label></p>
      <p class="desc3"><textarea name="komentar" id="tekst" value="<?php echo $komentar;?>" ></textarea></p>
      <br><br><br>
      <p class="submit" >  <input type="submit" name="submit"value="Posalji" /></p>
    </form>