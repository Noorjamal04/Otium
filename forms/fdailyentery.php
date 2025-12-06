<form method="post" action="kysely.php">

<h2>Kyselylomake</h2>
<br>
  
Kuinka virkeäksi tunnet olosi tänään?
  <select name="givenFeeling">
  <option value="5">😃 Erittäin virkeäksi</option>
  <option value="4">🙂 Melko virkeäksi </option>
  <option value="3">🙁 En virkeäksi, enkä väsyneeksi </option>
  <option value="2">😨 Melko väsyneeksi</option>
  <option value="1">😞 Erittäin väsyneeksi</option>
</select>
  
  
  <br>

  Kuinka stressaantunut olet tänään?
  <select name="givenStress">
  <option value="5">😃 En yhtään stressaantunut</option>
  <option value="4">🙂 Vähän stressaantunut</option>
  <option value="3">🙁 Jonkin verran stressaantunut</option>
  <option value="2">😨 Hyvin stressaantunut</option>
  <option value="1">😞 Erittäin stressaantunut</option>
</select>



<p>
  <input id="send" type="submit" name="submitRecovery" value="Lähetä" />
  <br>
  <br>
          
   </p>
</form>


<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Kysely vastaanotettu onnistuneesti!");
  });
});
</script>
