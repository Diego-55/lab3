<?php
declare(strict_types=1);

class Autor {
    private string $nombre;
    private string $apellido;
    private string $nacionalidad;
    private int $anioNacimiento;

    public function __construct(string $nombre, string $apellido, string $nacionalidad, int $anioNacimiento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nacionalidad = $nacionalidad;
        $this->anioNacimiento = $anioNacimiento;
    }


    public function getNombre(): string { return $this->nombre; }
    public function setNombre(string $nombre): void { $this->nombre = $nombre; }

    public function getApellido(): string { return $this->apellido; }
    public function setApellido(string $apellido): void { $this->apellido = $apellido; }

    public function getNacionalidad(): string { return $this->nacionalidad; }
    public function setNacionalidad(string $nacionalidad): void { $this->nacionalidad = $nacionalidad; }

    public function getAnioNacimiento(): int { return $this->anioNacimiento; }
    public function setAnioNacimiento(int $anio): void { $this->anioNacimiento = $anio; }
}
