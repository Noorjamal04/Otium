<fieldset>
<form method="post">
  <p>Etunimi *
  <br /> <input type="text" name="givenFirstname" placeholder="Kirjoita etunimi" maxlength="20"/>
  </p><p>
  <p>Sukunimi *
  <br /> <input type="text" name="givenLastname" placeholder="Kirjoita sukunimi" maxlength="20" />
  </p><p> 
  Sähköposti * 
  <br />  <input type="text" name="givenEmail" placeholder="Kirjoita sähköposti" maxlength="40" />
  </p><p>
  Salasana *
  <br />  <input type="password" name="givenPassword" placeholder="Salasana min 8 merkkiä" maxlength="40" />
  </p><p>
  Salasana uudelleen *
  <br />  <input type="password" name="givenPasswordVerify" placeholder="Salasana uudelleen"  />
  </p><p>
  Syntymävuosi *
  <br />  <input type="number" name="givenAge" placeholder="Syntymävuosi" min="1900" />
  </p><p>

<!--   Pituus *
  <br />  <input type="number" name="givenHeight" placeholder="Pituus cm"  min="0"/>
  </p><p>
  Paino *
  <br />  <input type="number" name="givenWeight" placeholder="Paino kg"  min="0" />
  </p> -->
  Sukupuoli *
  <br>  
  <p class="radio">
  <div class="radiogender"><input type="radio"  name="givenGender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Nainen</div><br>
  <div class="radiogender"><input type="radio"  name="givenGender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Mies</div><br>
  <div class="radiogender"><input type="radio"  name="givenGender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Muu/En halua kertoa</div>
</p>

  
  <br>

  <p>Otium-sovelluksen <a href="Tietosuojaseloste.pdf" onclick="check()" target="_blank" >Tietosuojaseloste</a>.</p>
  <p> <input type="radio" name="Tietosuojaseloste" id="tss" >Olen lukenut tietosuojaselosteen</p>

  <script>
        function check() {
          document.getElementById("tss").checked = true;
        }

</script>

<p>* = Pakollinen kenttä </p>



  <br />  <div class="button-container">
            <input type="submit" name="submitUser" value="Rekisteröidy" id="send" class="sendbutton"/>  
            <input type="submit"  value="Tyhjennä"/>
            <input type="submit" name="submitBack" value="Etusivulle"/>
          </div>
  </p>
</form>
</fieldset>
