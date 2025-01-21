<?php
function Hora(){
    date_default_timezone_set("America/Bogota");
    return date("h:i a");

}

echo "Hola, me podrias decir que hora es? \n";
echo "Claro, son las ". Hora();

?>