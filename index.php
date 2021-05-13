

<?php
    $nombre = (string) 'Fabian Andres Barragan Espinosa';
    $_edad = (int) 24;
    $Altura = (double) 1.70;
    $soy_Su_Profesor = (boolean) true;
    $HOBBIES = (array) ['Programar','y solo programar',407];
    
    $objeto = new stdClass;
    $objeto->cosas = "Tv";

    print_r($objeto->cosas);
    // echo "<br>"; 
    // var_dump($HOBBIES);

?>