import { consumeJson } from "./consumeJson.js"

/**
 * Envía los datos de la forma a la url usando la codificación
 * multipart/form-data.
 * @param {string} url
 * @param {Event} event
 * @param { "GET" | "POST"| "PUT" | "PATCH" | "DELETE" | "TRACE" | "OPTIONS"
 *  | "CONNECT" | "HEAD" } metodoHttp
 */
export function submitForm(url, event, metodoHttp = "POST") {

 event.preventDefault()

 const form = event.target

 if (!(form instanceof HTMLFormElement))
  throw new Error("event.target no es un elemento de tipo form.")

 return consumeJson(fetch(url, {
  method: metodoHttp,
  headers: { "Accept": "application/json, application/problem+json" },
  body: new FormData(form)
 }))

}

// Permite que los eventos de html usen la función.
window["submitForm"] = submitForm