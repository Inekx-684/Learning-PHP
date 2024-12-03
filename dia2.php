<?php
#control estructures (if, else if, else) and loops(for, while, foreach).

$edad = 56;
echo "edad = 56 <br>";
if($edad >= 18){
    echo "Usted es mayor de edad <br>";


}
else if($edad <18){
    echo"Usted es menor de edad <br>";
}
else if($edad > 99){
    echo"Usted esta viejito <br>";

}

$numero = 5;
echo"numero = 5<br>";
if($numero %2 == 0 ){
    echo"El numero es par <br>";
}else if($numero %2 != 0 ){
    echo"El numero es impar <br>";
}

#bucles
for($i = 1 ; $i <= 10; $i++){
    echo "cuenta de 0 a 10: $i <br>";
}

#creación de una lista
$frutas =["Pera", "Mango", "Fresa"];

foreach($frutas as $fruta){
echo "$fruta <br>";

}

echo "reto con ciclo for <br>";

for($i=0; $i <= 20; $i++){

    if($i%3 == 0 && $i%5 == 0){
        echo"FizzBuzz <br>";
    }else if ($i%3 == 0){
        echo"Fizz <br>";
    }
    else if ($i%5 == 0){
        echo"Buzz <br>";
    }else{
        echo "$i <br>"; 
    }

}

$nombres = ["Sofia", "Pepito", "Fulanito"];

foreach($nombres as $nombre){
    echo "Hola $nombre <br>";
}





?>