<?php 
#Arrays 
#an array is a structure that stores multiple values in one variable.

#simple array : Elements have an index.

$frutas = ["Guayaba", "Guanabana", "Pera"];

# Asociative array: Elements have keys and are not organized in a specific order.

$persona = [
    "nombre" => "Juan",
    "edad"=> 21,
    "ciudad" => "Medellin"

];

#multidimentional array: An array inside another array.

$productos = [
 ["nombre"=> "Laptop", "precio" => 3000],
 ["nombre"=> "Teclado", "precio" => 50]
];

#array operations

#printing elements
echo"Imprimir el primer elemento del arreglo frutas <br>";
echo "$frutas[0]<br>";

#adding elements.
$frutas[] = "Mango";
#echo $frutas; echo no muestra arrays por lo que se utiliza print_r
print_r($frutas);
echo "<br>";

#deleting elements
unset($frutas[1]);
echo"eliminar guanabana o el elemento 1";
print_r($frutas);
echo"<br>";

#loop through an array.
echo"iterando en un arreglo <br>";
foreach ($frutas as $fruta){
    echo "Fruta: $fruta<br>";
}

#Asociative arrays.
#calling an element

echo $persona["nombre"];
echo "<br>";

#adding elements
$persona["profesion"] = "ingeniero";
$persona["edad"] = 30;#modifica la edad
print_r($persona);
echo "<br>";

#Loop through an array
foreach($persona as $clave => $valor){
    echo"$clave : $valor <br>";
}

#multidimentional arrays

echo $productos[0]["nombre"]. "<br>"; #nombre del producto 1

#looping through a multidimentional array

foreach($productos as $producto){
    echo "producto: {$producto["nombre"]}, precio: {$producto["precio"]}<br> ";
}

#Adding an element

$productos[] = ["nombre" => "Mouse", "precio" => 20];


#challenge
#Create a program that contains an array of 5 numbers.
#calculate and print: - the sum of the numbers, - the average. -the biggest number and the smallest.

$numeros = [9, 20, 100, 79, 65];
$contador = 0;
$mayor = 0;
$menor = $numeros[0];
foreach($numeros as $numero){

    $contador = $numero + $contador;
    if ($mayor < $numero){
        $mayor = $numero;
    }
    if($menor > $numero){
        $menor = $numero; 
    }   
}

$promedio = $contador / count($numeros);
echo "Esta es la suma de los numeros:  $contador <br>";#funciono
echo "Este es el promedio de la suma de los numeros $promedio <br>";
echo "El numero mayor en el arreglo es: $mayor <br>";
echo "El numero menor en el arreglo es: $menor <br>";





?>