<?php

namespace Ejercicio06;

class Saludar
{


    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    function saludoFormal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return "Buenos días " . $this->nombre . " " . $this->apellido;
        } elseif ($horario >= 13 && $horario < 21) {
            return "Buenos tardes " . $this->nombre . " " . $this->apellido;
        } else {
            return "Buenos noches " . $this->nombre . " " . $this->apellido;
        }
    }

    function saludoInformal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return "¡Hola " . $this->nombre . "! " . "que tengas un " . "buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            return "¡Hola " . $this->nombre . "! " . "que tengas una " . "buena tarde";
        } else {
            return "¡Hola " . $this->nombre . "! " . "que tengas una " . "buena noche";
        }
    }
}