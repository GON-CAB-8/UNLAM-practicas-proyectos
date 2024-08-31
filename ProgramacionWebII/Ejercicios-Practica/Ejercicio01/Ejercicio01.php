<?php
function semaforo_a($color)
{

    $color = strtolower($color);

    if ($color == "rojo") {
        return "Frene";
    } elseif ($color == "verde") {
        return "Avance";
    } elseif ($color == "amarillo") {
        return "Precaución";
    } else {
        return "Estado desconocido";
    }

}

function semaforo_b($color)
{

    $color = strtolower($color);

    return (($color == "rojo") ? "Frene" :
        (($color == "verde") ? "Avance" :
            (($color == "amarillo") ? "Precaución" : "Estado Desconocido")));

}

function semaforo_c($color)
{
    $color = strtolower($color);

    switch ($color) {
        case($color == "rojo"):
            return "Frene";
        case($color == "verde"):
            return "Avance";
        case($color == "amarillo"):
            return "Precaucion";
        default:
            return "Estado Desconocido";
    }


}
