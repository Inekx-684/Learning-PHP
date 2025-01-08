<?php

$asientosDisponibles = 4;
$esHijodeTom = true;


if($asientosDisponibles > 0){
    echo "Puedes ver la peli";#si tengo solo una linea de código, puedo omitir las llaves.
}
else if($esHijodeTom == true){
    echo "no te cre, pero puedes ver la peli";
}
else{
    echo "Lastima, no puedes ver la peli";
}
echo "\n";

?>