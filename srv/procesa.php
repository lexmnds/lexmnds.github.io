<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$opcion = recuperaTexto("opciones");
switch($opcion){
    case "chiste": $resultado = "¿Qué le dijo un jaguar a otro jaguar? Jaguar you! jajajajaj";
    break;

    case "adivinanza": $resultado = "Tengo agujas y no sé coser, tengo números y no sé leer, ¿Puedes adivinar? ... Soy el reloj!!";
    break;

    case "chisme": $resultado = "¡Ya nació el hijo de Justin Bieber!";
    break;

    case "píropo": $resultado = "Hoy no sabía que ponerme.. así que me puse a pensar en ti <3"; 
    break;

    default: $resultado = "Porfavor selecciona una opción.";

}


devuelveJson(["opc" => ["innerHTML" => $resultado]]);
