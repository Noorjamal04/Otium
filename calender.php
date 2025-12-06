<?php session_start(); ?>
<?php
include("includes/header.php");
include("includes/inavindexdiary.php");
?>


<!-- navigaatiopalkki -->
<section>
<nav class="menu-container"><a class="button" href="etusivu.php">E T U S I V U</a><a class="button" href="calender.php">K A L E N T E R I</a><a class="button" 
                href="analysointi.php">A N A L Y S O I N T I</a><a class="button" 
				href="profile.php">P R O F I I L I</a><a class="button" href="info.php">I N F O</a><a class="button" href="aboutUs.html">M E I S T Ä</a>
</nav>
</section>

<br>


<div id="text-container">
<hr>
<article class="teksti">
    
Kalenteriin voit kirjoittaa erilaisia merkintöjä omista päivistäsi. Kalenterin alapuolelta löydät kyselyn, johon voit vastata kalenterimerkintöjen ohella. Kalenterimerkinnät ja kyselyn tulokset löytyvät yhteenvetona analysointi-sivulta.<br>
<br>
Klikkaa haluamaasi päivää jolle haluat luoda kalenterimerkinnän. Kirjoita merkintä ja klikkaa OK tallentaaksesi merkinnän. Klikkaa haluamaasi merkintää uudelleen poistaaksesi sen.

</article>
    


<hr>
</div>


<!-- Kalenteriin scriptit -->
<script>

//Tästä fetch näytä sen merkkintän kalentrissä kun merkkintä on syötetty
$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Luo merkintä:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                // Tästä se merkkintä lisänty toiminto
                $.ajax({
                    url: 'add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Merkintä lisätty!");
                        console.log("Added Successfully" + '  '+ title+'  '+ start+'  '+ end+'  ');
                        window.scrollBy(0, 700);
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        //Tästä merkkintä voisi siirtä toisen päivän kentään, mut se on pois päältä
        editable: false,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Merkintä päivitetty onnistuneesti");
                        }
                    });
                },
                //Tästä merkkintä poistu toiminto
        eventClick: function (event) {
            var deleteMsg = confirm("Oletko varma että haluat poistaa merkinnän?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "id=" + event.id,
                    success: function (response) {
                        //if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Merkintä poistettu");

                        //}
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 2000);
}
</script>



    <div class="response"></div>
    <div id='calendar'></div>
    <div class="slogancontainer">
    <div id="text-container2">
<hr>
<br>

    


<!-- Päivämerkkintojen sekä kyselyn vaastailla taulukot  -->
<?php include('forms/fdailyentery.php'); ?>

<?php include('db.php'); ?>

<hr>
</div>

<?php
 //kirjautuneen käyttäjän userID emailiin avulla
    $data1['email'] = $_SESSION['semail'];
    //var_dump($data1);
    $sql1 = "SELECT id FROM otium where email =  :email";
    $kysely1=$DBH->prepare($sql1);
    $kysely1->execute($data1);
    $tulos1=$kysely1->fetch();
    $currentUserID=$tulos1[0];
   //var_dump($_SESSION);
    // hae kalenteriin taulusta tämän käyttäjän uusimaan merkkinan päivämäärä
   
    $sql3 = "SELECT start FROM tbl_events where userID =:userID"

  ?>


  

    </div>
<br>
  <?php
  include("includes/footer.php")
  ?>