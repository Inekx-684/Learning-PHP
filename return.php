<?php

function Freddy(){
    $aleatorio = rand(1,4);
    $frase ="";
    switch($aleatorio){
        case 1:
            $frase ="Nunca pares de aprender \n";
            break;
        case 2:
            $frase = "Las empresas no son familia \n";
            break;
        case 3:
            $frase = "Amo PHP \n";
            break;
        case 4:
            $frase = "La tecnologia es el futuro";
            break;
        
    }
    return $frase;
}

echo Freddy();









?>