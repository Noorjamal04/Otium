<header>
<?php
//Käyttäjän tila (P Ä I V I T Ä  T I E T O S I sivu)

echo("<h1>P Ä I V I T Ä &nbsp; T I E T O S I</h1>");

if($_SESSION['sloggedIn']=="yes"){
    echo("<p class='loggedin'> <b>Tervetuloa:</b> <span id='myname'>" .$_SESSION['sfirstname']). "</span>";
    echo "  │  ";
    echo("<a href=\"logOutUser.php\" id='logout'>Kirjaudu ulos</a></p>");
    
}else{
    ?>
    
    <p>
    <a id="link1" href="createAccount.php">Luo tili</a> <a  id="link2" href="logInUser.php">Kirjaudu sisään</a> <br></p>
   
    <?php
}
?>



</header>


<br/>