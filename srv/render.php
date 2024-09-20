<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
   "opcion" => "Chiste",
   "contenido" => "¿Qué le dijo un jaguar a otro jaguar? Jaguar you! jajajajaj"
  ],
  [
   "opcion" => "Adivinanza",
   "contenido" => "Tengo agujas y no sé coser, tengo números y no sé leer, ¿Puedes adivinar? ... Soy el reloj!!"
  ],
  [
   "opcion" => "Chisme",
   "contenido" => "¡Ya nació el hijo de Justin Bieber!"
  ],
  [
   "opcion" => "píropo",
   "contenido" => "Hoy no sabía que ponerme.. así que me puse a pensar en ti <3"
  ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["opcion"]);
  $color = htmlentities($modelo["contenido"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$color}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
