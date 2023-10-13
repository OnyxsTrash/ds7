<?php
    print("<h1>Objetos 01: POO Declaración de la clase Animal.</h1>\n");
    require('../_lib/author.php');

    class Animal {
        private $color = "gris";
        private $peso  = 10;

        const PESO_LIGERO = 5;
        CONST PESO_MEDIO  = 10;
        
        CONST PESO_PESADO = 15;

        private static $contador = 0;

        public function __construct( $color, $peso ) {
            echo 'Llamada al constuctor <br />';
            $this -> color = $color;
            $this -> peso = $peso;
            self::$contador = self::$contador + 1 ;
        }

        public function getColor() {
            return $this -> color;
        }
        public function getPeso() {
            return $this -> peso;
        }

        public function setColor( $color ) {
            $this -> color = $color;
        }
        public function setPeso( $peso ) {
            $this -> peso = $peso;
        }

        public function comer_animal(Animal $animal_comido) {
            $this -> peso += $animal_comido -> peso;
            $animal_comido -> peso = 0;
            $animal_comido -> colo = "";
        }

        public static function moverse() {
            echo 'El animal se mueve';
        }

        public static function getContador() {
            return self::$contador;
        }

        public function __destruct() {
            self::$contador = self::$contador - 1; 
        }
    }
?>