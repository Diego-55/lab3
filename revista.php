<?php
declare(strict_types=1);
require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/IPublicable.php';

class Revista implements IPublicable {
    private string $titulo;
    private int $numeroEdicion;
    private int $anio;
    private Autor $autor;

    public function __construct(string $titulo, int $numeroEdicion, int $anio, Autor $autor) {
        $this->titulo = $titulo;
        $this->numeroEdicion = $numeroEdicion;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function getInfo(): string {
        return "Revista: {$this->titulo} #{$this->numeroEdicion} ({$this->anio}) - Editor: {$this->autor->getNombre()} {$this->autor->getApellido()}";
    }
}
