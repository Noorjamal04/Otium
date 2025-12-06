<?php
include_once("config/https.php");
include_once("config/config.php");
session_start();
?>

<!doctype html>
<html lang="fi">

<head>
    <link rel="icon" href="./kuvat/top-logo.png">
    <meta charset="utf-8">
    <title>Otium</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="./css/edit-this.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fullcalendar.min.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>


</head>

<body onload="getBackground()">

<!--     <?php
    //Käyttäjän tila, kun on kirjautrunut jokasella sivulla tule näkymään etu nimi sekä sukunimi.

    /* if ($_SESSION['loggedIn'] == "yes") {
        echo ("Tervetuloa: " . $_SESSION['sfirstname'] . " lastName: " . $_SESSION['slastname']);
    } */

    ?> -->