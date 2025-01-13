<?php

function estudianteCool($rank){

    if($rank >= 20000){
        echo"Eres un estudiante cool";

    }else{
        echo"no eres un estudiante tan cool";
    }

}

$rank = readline("ingresa tu rank \n");
estudianteCool($rank);
#--------------------------------------------------------------

function suma($a = 1,$b =1){#si no se pasa el valor, queda con estos valores por defecto

    echo "La suma de $a + $b es: ". $a + $b. "\n";

}

suma();#como tiene por defecto 1 la respuesta será 2

#$arreglo = [1,2,3];
#$arreglo1 = [4,5,6];

#$resultado = [...$arreglo, ...$arreglo1];

#var_dump($resultado);

#se puede asignar un array para parametros

$numeros =[1,2];

suma(...$numeros);#array unpacking


function sumaInfinita(...$parametros){
    #var_dump($parametros);
    $suma = 0;
    foreach($parametros as $numero){
        $suma += $numero; 
        echo $suma. "\n";
    }
    
}

sumaInfinita(1,2,3,4);


?>

