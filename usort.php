<?php

$precioCafes = [12,56,32,89,2,1];

usort($precioCafes, function($a, $b){#usort ubica priemero 12 en $a y luego 56 en $b, luego 56 en $a y 32 en $b etc.

    return $a <=> $b;#utiliza nave espacial para comparar cual es mayor
    # si es menor que 0 a < que $b si es 0 es a = b, si es mayor a 0 $a es mayor a $b 
});

var_dump($precioCafes);












?>