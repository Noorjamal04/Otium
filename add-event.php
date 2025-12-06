<?php session_start(); ?>
<?php

require_once "db.php";

$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";


//kirjautuneen käyttäjän emailiin kautta
$data2['email'] = $_SESSION['semail'];
//var_dump($data1);
$sql1 = "SELECT id FROM otium where email =  :email";
$kysely1 = $DBH->prepare($sql1);
$kysely1->execute($data2);
$tulos1 = $kysely1->fetch();

$data1['userID'] = $tulos1[0];


?>