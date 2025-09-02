<?php
declare(strict_types=1);
require_once __DIR__ . '/Autor.php';

class ImprimirAutor {
    public function getInfo(Autor $autor): string {
        return "Autor: {$autor->getNombre()} {$autor->getApellido()} ({$autor->getNacionalidad()}, {$autor->getAnioNacimiento()})";
    }
}
