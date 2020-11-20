<?php 
$usuarios = array(
    array("felipe","rendon",18,"31452232","12g34"),
    array("jaime","rendon",18,"31452232","567g8"),
    array("pepito","rendon",18,"31452232","098g77"),
    array("sacarias","rendon",18,"31452232","gh65"),
    array("pedrito","rendon",18,"31452232","34fg")
);

foreach($usuarios as $usuario){
     echo $usuario[0]."-->".$usuario[4];
     echo "<br>";
}

?>