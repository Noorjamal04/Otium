<?php
$user = 'noorja';
$pass = 'Password2020';
$host = 'mysql.metropolia.fi';
$dbname = 'noorja';

try { //Avataan viittaus tietokantaan
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // virheenkasittely: virheet aiheuttavat poikkeuksen
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// merkistö utf8
	$DBH->exec("SET NAMES utf8;");
    //echo "Yhteys OK."; 
} catch(PDOException $e) {
	echo "Yhteysvirhe: " . $e->getMessage(); 
	file_put_contents('log/DBErrors.txt', 'Connection: '.$e->getMessage()."\n", FILE_APPEND);
}//HUOM hakemistopolku!
?>
