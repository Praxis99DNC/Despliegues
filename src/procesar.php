<?php

function procesarTexto($texto)
{
    if (trim($texto) === '') {
        $texto = 'Pablo Motos';
    }
    $mensajes = [
        "El texto que pusiste: ",
        "Escribiste: ",
        "El texto escrito era: "
    ];

    $indice = rand(0, count($mensajes) - 1);

    return $mensajes[$indice] . $texto;
}