<?php

    print("<h1>Objetos 05: Clases o Métodos estáticos.</h1>\n");
    require('../_lib/author.php');

    class unaClase {
        private $x;
        private static $numeroObjetos = 0;
        const PREDETERMINADO = 'X';

        public static function numeroObjetos() {
            return unaClase::$numeroObjetos;
        }

        public function __construct($valor = unaClase::PREDETERMINADO ) {
            $this -> x = $valor;
            unaClase::$numeroObjetos++;
            echo "Creación del Objeto $this->x<br />";
        }
        public function __destruct() {
            unaClase::$numeroObjetos--;
            echo "Eliminación del Objeto $this->x<br />";
        }
    }

    $desconocido = new unaClase();
    $abc = new unaClase("ABC");
    echo unaClase::numeroObjetos(), ' Objeto(s) <br />';
    unset($desconocido);
    echo unaClase::numeroObjetos(), ' Objeto(s) <br />';
?>