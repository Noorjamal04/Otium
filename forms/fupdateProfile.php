
<form method="post" action="update-profile.php" >
<p>Vaihda etunimi:<br>
<input type="text" value="<?php echo($_SESSION["sfirstname"]); ?>"  name="newFname" required ><span id="newFname" ></span>
<br></p>
<p>Vaihda sukunimi:<br>
<input type="text" value="<?php echo($_SESSION["slastname"]); ?>" name="newLname" required ><span id="newLname" ></span>
<br></p>
<p>Vaihda syntymävuosi:<br>
<input type="number" value="<?php echo($_SESSION["sage"]); ?>" name="givenNewage" required min="1900"><span id="givenNewage"  ></span>
<br></p>
<!-- <p>Vaihda paino:<br>
<input type="number" name="newWeight" required ><span id="newWeight" ></span>
<br></p>
<p>Vaihda pituus:<br>
<input type="number" name="newHeight" required ><span id="newHeight" ></span>
<br></p> -->
<p id="gender" class="radio">
Vaihda sukupuoli:
<div class="radiogender"><input  type="radio" name="givenNewgender" <?php if ($_SESSION['sgender']=="female"){ echo("checked =\"checked\"");}?> value="female">Nainen</div><br/>
  <div class="radiogender"><input  type="radio" name="givenNewgender" <?php if ($_SESSION['sgender']=="male"){ echo("checked =\"checked\"");}?> value="male">Mies</div><br/>
  <div class="radiogender"><input  type="radio" name="givenNewgender" <?php if ($_SESSION['sgender']=="other"){ echo("checked =\"checked\"");}?> value="other">Muu/En halua kertoa</div><br/>
</p>
<p>Uusi sähköposti:<br>
<input type="email" value="<?php echo($_SESSION["semail"]); ?>" name="newEmail" required ><span id="newEmail" ></span>
<br></p>
<p>Varmistuksen vuoksi syötä uusi salasanasi tai se vanhan:<br>
<input type="password" name="newPassword" required ><span id="newPassword" ></span>
<br></p>
<p>Vahvista salasana:<br>
<input type="password" name="confirmPassword" required ><span id="confirmPassword" ></span>
<br></p>
<br>
<input type="submit" name="update" value="Tallenna" id="send">
<!-- <input type="submit" name="submitBack" value="Etusivulle"/> -->

<br/>
<br/>
</form>



