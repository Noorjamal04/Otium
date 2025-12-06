<header>
<?php
//Käyttäjän tila (I N F O sivu)

echo("<h1>I N F O </h1>"); 
if($_SESSION['sloggedIn']=="yes"){
    echo("<p class='loggedin'> <b>Tervetuloa:</b> <span id='myname'>" .$_SESSION['sfirstname']). "</span>";
    echo "  │  ";
    echo("<a href=\"logOutUser.php\" id='logout'>Kirjaudu ulos</a></p>");
    
}else{
    ?>
    
    <p>
    <a id="link1" href="createAccount.php">Luo tili</a> <a  id="link2" href="logInUser.php">Kirjaudu sisään</a> <br>
    </p>
    
    <?php
}
?>



</header>
<br/>