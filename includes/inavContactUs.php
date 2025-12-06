<header>

<?php
//Käyttäjän tila (palautten anatmaan sivuvulla)

echo("<h1>Tervetuloa palautten anatmaan sivuvulla</h1>"); // 
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