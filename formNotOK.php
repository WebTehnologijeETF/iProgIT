<h1>Unesite podatke</h1>
<h4>* Obavezna polja</h4>
    <form method="post" class="forma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
      
              <p class="desc3">  <label >Ime i prezime</label></p>

      <p class="desc3"><input type="text" name="name" value="<?php echo $name;?>" id="ime" /> 
          <span class="error">* <?php  echo $nameErr;?></span>
<br><br>

  <p class="desc3">  <label for="mjesto" >Grad</label></p>

      <p class="desc3"><input type="text" name="grad" value="<?php echo $grad;?>" id="mjesto" /> 
          <span class="error">* <?php  echo $gradErr;?></span>

      <br> <br>
       <p class="desc3">  <label for="Pbroj" >Postanski broj</label></p>

      <p class="desc3"><input type="text" name="pbroj" value="<?php echo $pbroj;?>" id="pbroj"  /> 
          <span class="error">* <?php  echo $pbrojErr;?></span>

      <br><br>

      <label for="email">Email</label></p>
      <p class="desc3"><input type="email" name="email"  value="<?php echo $email;?>" id="mail1"  /> 
                <span class="error">* <?php  echo $emailErr;?></span> <br><br>

       <label for="email">Ponovite Email</label></p>
      <p class="desc3"><input type="email" name="email2"  value="<?php echo $email2;?>" id="mail2"  /> 
       <span class="error">* <?php  echo $email2Err;?></span> <br><br>


       <label for="semail">Subject email-a</label></p>
      <p class="desc3"><input type="text" name="semail" value="<?php echo $semail;?>" id="mail3"  />
       <span class="error">* <?php  echo $subjErr;?></span> <br><br>

       <br><br>

   <label for="text">Komentar</label></p>
      <p class="desc3"><textarea name="komentar" id="tekst"  ></textarea></p>
      <br><br><br>
      <p class="submit" >  <input type="submit" name="submit"value="Posalji" /></p>
    </form>