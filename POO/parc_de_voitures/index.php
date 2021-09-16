<?php
require "voitures.php";
require 'display.php';

$display=new display();

$opel=new voitures ("Opel","Corsa","orange","1455","BE 1TDQ688", "98000","2019-8-15","./img/opel-corsa-e_4292_1.webp");
$audi=new voitures("Audi","TT coupe","grey","1280","DE 15 20 PQ", "120000", "1998-9-20", "./img/audi-tt-coupe_218_7.webp");
$hyunday=new voitures("Hyundai", "i20", "red","955","BE 1PQD888", "210000", "2015-1-15", "./img/hyundai-i20-coupe_3426_1.webp");
$volkswagen=new voitures("Volkswagen","Golf", "yellow", "1129","FR 55 55 MN", "200000","2012-2-27","./img/volkswagen-golf_3020_12.webp");
$volvo=new voitures("Volvo","XC60", "blue", "1769", "DE 999 MMM","70000", "2020-4-29", "./img/volvo-xc60_4114_36.webp");
$jeep=new voitures("Jeep", "Wrangler","white", "1913", "FR 54 89 KL", "86000", "2019-12-20","./img/jeep-wrangler-unlimited_4215_1.webp");
$audi1=new voitures("Audi", "Q2 " ,"black","1240","FR 15 20 PQ", "100000", "2016-9-20","./img/audi-q2_3734_10.webp");
$volkswagen1=new voitures("Volkswagen", "Amarok", "grey", "2105","BE 1PLM 555", "150000","2016-3-20","./img/volkswagen-amarok-dubbele-cabine_3663_1.webp");
$opel1=new voitures("Opel", "Crossland","Blue","1065","FR 1TDQ688", "110000","2020-8-15","./img/opel-crossland_4721_4.webp");
$cars=[$opel,$audi,$opel1,$audi1,$hyunday,$volkswagen,$volkswagen1,$volvo,$jeep];

echo $display->meta();
echo $display->css();

?>
<table>
<theader>
      <th colspan= "9"><h1>CARS</h1></th>
   </theader>
   <tr>
       <th>Image</th>
       <th>Brand</th>
       <th>Model</th>
       <th>Color</th>
       <th>Registration Number</th>
       <th>Year</th>
       <th>Kilometers</th>
       <th>Weight</th>
   </tr>
   <tbody><?php foreach($cars as $car){

             $car->table();
           }
          ?>
   </tbody>
</table>