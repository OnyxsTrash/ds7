<?php
    print("<h1>Objetos 02: POO Instancia de objetos de la clase Animal.</h1>\n");
    require('../_lib/author.php');

    require_once 'p08_clase01_animal.php';

    $perro = new Animal("Amarillo", 22);

    echo "El peso del perro es: " . $perro -> getPeso() . "<br />";
    echo "El color del perro es: " . $perro -> getColor() . "<br />";

    $perro -> setColor("Negro");
    $perro -> setPeso(50);

    echo "Ahora el color del perro es: " . $perro -> getColor() . "<br />";
    echo "Llamando al metodo estatico moverse desde la clase" . Animal::moverse() . "<br />";
    echo "Llamando al metodo estatico moverse desde la instacia" . $perro -> moverse() . "<br />";

    $perro1 = new Animal("gris", Animal::PESO_MEDIO);
    echo "El peso del perro es: " . $perro -> getPeso() . "<br />";
    echo "La cantidad  de aniamles que se han instanciado: " . Animal::getContador() . "<br />";

    $pez1 = new Animal("gris", Animal::PESO_MEDIO);
    $pez2 = new Animal("rojo", Animal::PESO_LIGERO);
    
    echo "El peso del pez1 es: " . $pez1 -> getPeso() . "<br />";
    echo "El peso del pez2 es: " . $pez2 -> getPeso() . "<br />";

    $pez1 -> comer_animal( $pez2 );

    echo "El nuevo peso del pez1 es: " . $pez1 -> getPeso() . "<br />";
    echo "El nuevo peso del pez2 es: " . $pez2 -> getPeso() . "<br />";
    echo "Numero de animales antes de eliminar al pez consumido: " . Animal::getContador() . "<br />";
    unset($pez2);

    echo "Numero de animales despues de eliminar al pez consumido: " . Animal::getContador() . "<br />";
?>