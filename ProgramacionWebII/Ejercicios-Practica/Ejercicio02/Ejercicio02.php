<?php

function binomioCuadradoPerfecto_a($a, $b)
{
    $resultado = pow($a, 2) + 2 * $a * $b + pow($b, 2);
    return $resultado;
}

function binomioCuadradoPerfecto_b($a, $b)
{
    $resultado = ($a * $a) + 2 * $a * $b + ($b * $b);
    return $resultado;
}