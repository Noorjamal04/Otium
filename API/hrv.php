<?php header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8"); 

//hrv Json data yhdistettynä Chartiin
//Tästä voi käytä tietokanta ja sessioita 
 $data2 = array(
array("day"=> "04-26",
"value"=> 40),

array("day"=> "04-27",
"value"=> 80),

array("day"=> "04-28",
"value"=> 90),

array("day"=> "04-29",
"value"=> 75),

array("day"=> "04-30",
"value"=> 70),

array("day"=> "05-01",
"value"=> 85),

array("day"=> "05-02",
"value"=> 60)

 );
 echo(json_encode($data2));
 
 ?>