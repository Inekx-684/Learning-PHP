<?php 

$michis= [
    $michi1 = ["nombre" =>"Alfredo", "ocupacion" => "programador", "comida"=>["likes" => "papas", "dislikes" => "Borcoli"] ],
    $michi2 = ["nombre" =>"Pepe", "ocupacion" => "Repostero", "comida"=>["likes" => "Pastel", "dislikes" => "Salchipapas"] ],
    $michi3 = ["nombre" =>"Sigifredo", "ocupacion" => "Papa", "comida" =>["likes" => "dulces", "dislikes" => "limones"] ]
];

var_dump($michi1);

echo "La comida favorita de alfredo es:". $michi1["comida"]["likes"]. "\n";

echo "la ocupacion de Sigifredo es: ". $michi3["ocupacion"];

?>