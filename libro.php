<?php
declare(strict_types=1);
require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/IPublicable.php';

class Libro implements IPublicable {
    private string $titulo;
    private Autor $autor;
    private int $anio;

    public function __construct(string $titulo, Autor $autor, int $anio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
    }

    public function getInfo(): string {
        return "Libro: {$this->titulo} ({$this->anio}) - {$this->autor->getNombre()} {$this->autor->getApellido()}";
    }
}