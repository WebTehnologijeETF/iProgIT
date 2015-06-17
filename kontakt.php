<h1>Unesite podatke</h1>
<h4>* Obavezna polja</h4>
    <form method="post" class="forma" action="kontakat_php.php" >
      
              <p class="desc3">  <label >Ime i prezime</label></p>

      <p class="desc3"><input type="text" name="name" value="" id="ime" /> 
          <span class="error">* </span>
<br><br>

  <p class="desc3">  <label for="mjesto" >Grad</label></p>

      <p class="desc3"><input type="text" name="grad" id="mjesto" />         
       <span class="error">* </span>
 <br> <br>
       <p class="desc3">  <label for="Pbroj" >Poštanski broj</label></p>

      <p class="desc3"><input type="text" name="pbroj" id="pbroj"  /><span class="error">* </span> <br><br>

      <label for="email">Email</label></p>
      <p class="desc3"><input type="email" name="email" id="mail1"  /><span class="error">* </span> <br><br>
       <label for="email">Ponovite Email</label></p>
      <p class="desc3"><input type="email" name="email2" id="mail2"  /> <span class="error">* </span><br><br>
       <label for="semail">Subject email-a</label></p>
      <p class="desc3"><input type="text" name="semail" id="mail3"  /> <span class="error">* </span><br><br>

   <label for="text">Komentar</label></p>
      <p class="desc3"><textarea name="komentar" id="tekst"  ></textarea></p>
      <br><br><br>
      <p class="submit" >  <input type="submit" name="submit"value="Posalji" /></p>
    </form>