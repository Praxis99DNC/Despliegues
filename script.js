const mensajes = [
  "Bienvenido a la página de David Navarro Couñago",
  "Página web de David Navarro Couñago",
  "La página de David Navarro Couñago"
];

let indice = 0;
const mensaje = document.getElementById("mensaje");
const boton = document.getElementById("cambiar");

boton.addEventListener("click", () => {
  indice = (indice + 1) % mensajes.length;
  mensaje.textContent = mensajes[indice];
});
