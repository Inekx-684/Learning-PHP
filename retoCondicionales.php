<?php
#para poder retirar debo tener mino 100 dolares.
#cuanto dinero tiene 
#tomar la desicion de si dejarlo retirar o no?

$dinero = readline("Cuanto dinero has acumulado? ");
$intDinero = intval($dinero);
if($intDinero >= 100){
    echo"Puedes retirar ";
    echo "\n";
}
else if($intDinero < 100){
    echo"No puedes retirar";
    echo "\n";
}
else{
    echo "Que raro...";
}


?>