
<form class="forma" >
			<p class="name">Ime:<br><input type="text"  id="name"/>
<br>


			<p class="email" >Email:<br><input type="email" id="email" />
				<br>

		
			<p class="text">Komentar:<br><textarea id="text"></textarea>  		
			<p class="submit"><input type="button" value="Posalji" onclick=<?php  $id=$_GET['Id'];  print 'Komentar('.$id.')'  ?>  /></p>

			
</form>