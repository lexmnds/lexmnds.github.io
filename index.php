<!DOCTYPE html>
<html lang="es">

<head>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width">

 <title>Servicio que procesa un formulario</title>

</head>
<body>
    <h1>Select con 4 opciones</h1>

    <form onsubmit="procesaForm(event)">
        <p>
            <label for="opciones">Selecciona una opción</label>
            <select name="opciones" id="opciones">
                <option value="">Sin seleccionar</option>
                <option value="chiste">Chiste</option>
                <option value="adivinanza">Adivinanza</option>
                <option value="chisme">Chisme</option>
                <option value="píropo">Píropo</option>
            </select>
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
        
    </form>
    <p>
        <label for="">Respuesta: </label>
        <output name="opc" id="opc"></output>
    </p>
    <a href="/vistas/renderserv.php">Renderizador en el servidor</a>
    <script type="module">
        import { muestraError } from "./lib/js/muestraError.js"
        import { submitForm } from "./lib/js/submitForm.js"
        import { muestraObjeto } from "./lib/js/muestraObjeto.js"

  /**
   * @param {Event} event
   */
  async function procesaForm(event) {
   try {
    const respuesta =
     await submitForm(
      "srv/procesa.php", event)
    muestraObjeto(document, respuesta.body)
   } catch (error) {
    muestraError(error)
   }
  }
 
  // Permite que los eventos de html usen la función.
  window["procesaForm"] = procesaForm

    </script>
</body>