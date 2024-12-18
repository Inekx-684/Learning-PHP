<?php 

$segundos= readline("ingresa el tiempo en segundos: ");//es un input

echo "Usted ngreso : ".$segundos. "segundos";

$horas = (int)($segundos / 3600);

#los minutos es lo que sobra de las horas.
$segundos = (int)($segundos %3600);

$minutos = (int)($segundos / 60);

$segundos =(int)($segundos % 60);

echo "La cantidad de segundos que ingreso fueron: ". $horas. "horas \n";
echo "con ".$minutos. "minutos \n";
echo "con " . $segundos. "segundos";


?>