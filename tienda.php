<?php
$producto1 = "doritos";
$producto2 = "today";
$producto3 ="yuca";
$producto4 = "papas";
$producto5 = "aceite";
$producto6 = "frutino";
$producto7 = "sal";
$producto8 = "carne res";
$producto9 = "tomate";
$producto10 = "bananos";

$precio1 = 8000;
$precio2 = 13000;
$precio3 = 5000;
$precio4 = 6000;
$precio5 = 10000;
$precio6 = 3000;
$precio7 = 1000;
$precio8 = 30000;
$precio9 = 2000;
$precio10 = 4000;

$totalCompra = $precio1 + $precio2 + $precio3 + $precio4 + $precio5 + $precio6 +$precio7+ $precio8 + $precio9 + $precio10;


echo("El total de la compra es ".$totalCompra);
echo("<br>");

if($totalCompra <= 80000){
    echo("Gracias por su compra");
}
else{
    echo("Debe validar su compra, eres pobre.");
}
?>