<?php 

function get_pokemon(){#devuelve un pokemon de forma aleatoria

    $aleatorio = rand(1,5);

    switch($aleatorio){
        case 1:
            echo"Pikachu \n";
            break;
        case 2:
            echo"Charmander \n";
            break;
        case 3:
            echo "Bulbasaur \n";
            break;
        default:
            echo "No hay pokemon para ti \n";
    }
}

for($i = 0; $i < 10; $i++){
    get_pokemon();
}

?>