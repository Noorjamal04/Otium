<?php
include("includes/header.php");
include("includes/inavindexinfo.php");
?>

<br>
<!-- navigaatiopalkki -->
<section>
    <nav class="menu-container"><a class="button" href="etusivu.php">E T U S I V U</a><a class="button" href="calender.php">K A L E N T E R I</a><a class="button" href="analysointi.php">A N A L Y S O I N T I</a><a class="button" href="profile.php">P R O F I I L I</a><a class="button" href="info.php">I N F O</a><a class="button" href="aboutUs.html">M E I S T Ä</a>
    </nav>
</section>

<main>
    <div id="text-container">
        <br>
        <hr>
        <article class="teksti">


            <br>


            <h3>Kalenteri</b> </h3>
            Kalenteriin voit kirjoittaa erilaisia merkintöjä omista päivistäsi. Kalenterin alapuolelta löydät kyselyn, johon voit vastata kalenterimerkintöjen ohella. Kalenterimerkinnät ja kyselyn tulokset löytyvät yhteenvetona analysointi-sivulta.
            Klikkaa haluamaasi päivää jolle haluat luoda kalenterimerkinnän. Kirjoita merkintä ja klikkaa OK tallentaaksesi merkinnän. Klikkaa haluamaasi merkintää uudelleen poistaaksesi sen.
            <br>
            <br>

            <h3>Analysointi</h3>
            Analysointi sivulla voit tarkastella omia kalenterimerkintöjäsi sekä kyselyn tuloksia.
            Voit myös tarkastella analysoitua HRV-dataasi kaavion muodossa.<br><br>


            <h3>Profiili</h3>
            Profiili sivulla voit tarkastella omia tietojasi, muokata niitä sekä poistaa käyttäjätilisi turvallisesti.<br><br>


            <h3>Meistä</h3>
            Tällä sivulla voit tutstua OTIUM:in kehittäjiin.<br><br>

            
            <br>

            <h3>Voit täyttää myös yhteydenottolomakkeen painamalla "ota yhteyttä" nappia</h3>

            <br>

            <!-- Ota yhteyttä nappulla -->
            <form action="contactUs.html">
                <a class="contactUs" href="contactUs.html">Ota yhteyttä</a>
            </form>
            <br>
        </article>




        <hr>
        <br>
    </div>
</main>



<?php
//Käyttäjän tila

if ($_SESSION['loggedIn'] == "yes") {
    echo ("Kirjautunut: " . $_SESSION['sfirstname'] . " lastName: " . $_SESSION['slastname']);
}
?>


<?php
include("includes/footer.php")
?>