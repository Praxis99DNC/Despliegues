const mensajes = [
  "El texto que pusiste: ",
  "Escribiste: ",
  "El texto escrito era: "
];

let indice = 0;
let imagenAñadida = false; 

const mensaje = document.getElementById("mensaje");
const boton = document.getElementById("cambiar");

boton.addEventListener("click", () => {
  let texto = document.getElementById("texto").value;
  if (texto.trim() === '') {
    texto = "Toma Pablo Motos";
  }
  indice = (indice + 1) % mensajes.length;
  mensaje.textContent = mensajes[indice] + texto;

  if (!imagenAñadida) {
    const img = document.createElement("img");
    img.src = "imagenes/pabloenmoto.jpeg";
    img.alt = "Imagen añadida";
    img.style.width = "200px";
    img.style.borderStyle = "solid";
    img.style.borderWidth = "3px";
    img.style.borderColor = "azure";

    document.querySelector(".recuadro").appendChild(img);

    imagenAñadida = true;
  }
});
