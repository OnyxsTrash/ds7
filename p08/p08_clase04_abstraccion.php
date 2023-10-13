<?php

    print("<h1>Objetos 03: POO Clases o Métodos Abstractos.</h1>\n");
    require('../_lib/author.php');

    abstract class ClaseMadre {
        protected $x;

        public function get() {
            return "GET = $this->x";
        }

        abstract public function put($valor);
    }

    class ClaseHija extends ClaseMadre {
        public function put($valor) {
            $this -> x = $valor;
        }
    }

    $objeto = new ClaseHija();
    $objeto -> put(123);
    echo $objeto -> get();

?>