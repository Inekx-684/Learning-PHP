<?php 

#variable, condicion, acción con el contador

for($contador = 0; $contador < 10; $contador++){
    #el contador empieza en 0, condicion= mientras sea menor que 10, accion = sumar uno en cada iteracion
    echo $contador. "\n";
}

for($contador2 = 10; $contador2 > 10; $contador2--){
    #el contador empieza en 0, condicion= mientras sea menor que 10, accion = sumar uno en cada iteracion
    echo $contador2. "\n";
}


#Se pueden utilizar varias variables.
#en este caso la condicion esta relacionada con i pero no con j.
for($i = 0,$j = 0 ; $i< 10; $i++, $j += 2){
    echo"i = $i si j = $j". "\n" ;
}




?>