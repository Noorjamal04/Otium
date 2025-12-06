<?php session_start(); ?>

<?php
    require_once "db.php";
    try {

        // Kun käyttäjä paina syötyn merkkintä, poista merkkintäsi popUp tule tästä poistu myös sql:ssä
    $data['id'] = $_POST['id'];

    $STH = $DBH->prepare("DELETE from tbl_events WHERE id=:id");
    $STH->execute($data);

        } catch(PDOException $e) {
            echo ".Yhteysvirhe:. " . $e->getMessage(); 
            file_put_contents('log/DBErrors.txt', 'Connection: '.$e->getMessage().".\n.", FILE_APPEND);
        }
    
?>