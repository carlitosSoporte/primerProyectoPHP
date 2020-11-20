<?php 

$nombres = array("arroz","salchichas",5,3.14);
print_r($nombres);
echo ("<br>");
echo ("<br>");
array_push($nombres,"Felipe");

$nombresAsociativos = array("producto1"=>"arroz","producto2"=>"salchichas","numero"=>5,"pi"=>3.14);
print_r($nombresAsociativos);
echo ("<br>");
echo ("<br>");

for($i = 0; $i < sizeof($nombres);$i+=1){
    echo($nombres[$i]);
    echo ("<br>");
    
}


?>