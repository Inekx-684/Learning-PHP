<?php 

$a = 4;
$b = 7;
$c = 4;
$d = 9;

// == igual.no compara tipos
var_dump($a == $c);

// === identico, compara tipos de datos
var_dump($a === $c);

// != diferente
var_dump($a != $c);

// !== diferente (compara tipos)
var_dump($a !== $c);

//< menor que
var_dump($b < $d);

//> mayor que
var_dump($b > $d);

//<=> operador de nave espacial (solo lo tiene php)
echo (2 <=> 1). "\n" ;//si el numero de la izquierda es mayor devuelve un 1
//si los numeros son iguales da 0
//si el numero de la izquierda es menor que el de la izquieda -1

//?? fusion de null

$edadPepito = 23;

echo $edadJuanito ?? $edadPepito;//si una variable no existe, usa la otra




?>