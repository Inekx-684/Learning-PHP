<?php
#casting a variable is when we change its type of data
$caracter = "5";#is a string.

$numero = 5;#is a number

$caracter = (int)$caracter; #we change the type of data from string to number.

$suma = $numero + $caracter;

echo $suma. "\n";#it will print ten

$caracter2 = "2";

$suma2 = $caracter2 + $numero; #but php can sum strings and ints

echo $suma2. "\n";

$flotante = 3.1416;
$flotante = (int)$flotante; 

echo $flotante; #it cuts the numbers intead of rounding them.

#casting can be used with booleans too.
$verdadero = 1;
$falso = 0;

$verdadero = (bool)$verdadero;
$falso = (bool)$falso;

var_dump($verdadero);#in this case we use var_dump beacuse it shows the type of data.
var_dump($falso);

?>