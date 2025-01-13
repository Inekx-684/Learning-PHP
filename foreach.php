<?php 
#foreach es un ciclo inteligente, mas facil de leer que recorre cualquier objeto uno por uno sin decirle cuanto debe recorrer

#foreach(iterable as valor)
#foreach(iterable as llave => valor)funciona muy bien como arreglos


$tienditaDeCafes = array(
    "americano" =>20, 
    "Latte" => 25,
    "Capuccino" => 27,
    "Recalentado" => 10,
    "Mocca" => 24

);


foreach($tienditaDeCafes as $costo){
    echo "El cafe en cuestion cuesta $$costo USD". "\n";

}
#Asigna la variable internamente
foreach($tienditaDeCafes as $cafe => $costo){
    echo "El cafe $cafe en cuestion cuesta $$costo USD". "\n";

}
#break rompe una ejecucion sin importar nada
#continue salta a la siguiente iteracion.

foreach($tienditaDeCafes as $cafe => $costo){
    echo "El cafe $cafe en cuestion cuesta $$costo USD". "\n";
    if($cafe == "Latte"){
        echo "Encontramos el latte";
        break;
    }

}

foreach($tienditaDeCafes as $cafe => $costo){
    
    if($cafe == "Recalentado"){
        continue;
    }
    echo "El cafe $cafe es muy rico". "\n";
}



?>