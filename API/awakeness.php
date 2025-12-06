<?php header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8"); 

//Vireys Json data yhdistettynä Chartiin
//Tästä voi käytä tietokanta ja sessioita 
 $data3 = array(
array("date"=> "04-26",
"value"=> 3),

array("date"=> "04-27",
"value"=> 4),

array("date"=> "04-28",
"value"=> 3),

array("date"=> "04-29",
"value"=> 2),

array("date"=> "04-30",
"value"=> 4),

array("date"=> "05-01",
"value"=> 1),

array("date"=> "05-02",
"value"=> 5)

 );
 echo(json_encode($data3));
 
 ?>
