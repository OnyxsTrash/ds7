<?php

    print("<h1>Objetos 03: POO Herencia - Legado.</h1>\n");
    require('../_lib/author.php');

    class Usuario {
        public $apellido;
        public $nombre;

        public function __construct( $apellido, $nombre ) {
            $this -> apellido = $apellido;
            $this -> nombre = $nombre;
        }

        public function informacion() {
            return "$this->apellido $this->nombre";
        }
    }

    class Usuario_Color extends Usuario {
        public $colores;

        public function __construct( $nombre, $colores ) {
            parent::__construct($nombre, 'Sin Apellido');
            $this -> colores = $colores;
        }

        public function colores() {
            return implode(', ', $this -> colores);
        }
    }

    $yo = new Usuario_Color("Robin", ['Verde', 'Rojo', 'Amarillo']);
    echo "{$yo->informacion()}<br />";

    echo "{$yo->colores()}<br />"
?>