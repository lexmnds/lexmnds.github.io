<!DOCTYPE html>
<html lang="es">

<head>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width">

 <title>Renderizador en el servidor</title>

 <script type="module" src="/lib/js/consumeJson.js"></script>
 <script type="module" src="/lib/js/muestraObjeto.js"></script>
 <script type="module" src="/lib/js/muestraError.js"></script>


</head>
<body onload="consumeJson('../srv/render.php').then(respuesta => muestraObjeto(document, respuesta.body)).catch(muestraError)">
    <h2>Renderizador en el servidor</h2>

    <dl id="lista">
        <dt>Cargando…</dt>
        <dd><progress max="100">Cargando…</progress></dd>
    </dl>

    <a href="../index.php">Regresar</a>
</body>
</html>