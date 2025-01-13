<?php

#michi 1: 9
#michi 2: 4
#michi 3: 3
#michi 4: 9
#michi 5: 1

$michi = 5;

switch($michi){

    case 1: #si no tiene break, salta inmediatamente al caso que tiene abajo, el break simplemente pausa la operacion.
        echo"su numero favorito es el 9";
        break;
    case 2: 
        echo"su numero favorito es el 4";
        break;
    case 3: 
        echo"su numero favorito es el 3";
        break;
    case 4: 
        echo"su numero favorito es el 9";
        break;
    case 5: 
        echo"su numero favorito es el 1";
        break;
    default:
    echo"Ese michi no existe";
}

#Sera posible hacer un switch para ejecutar pasos de forma especifica?











?>