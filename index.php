<?php
declare(strict_types=1);

require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/ImprimirAutor.php';
require_once __DIR__ . '/Libro.php';
require_once __DIR__ . '/Revista.php';


$autor1 = new Autor('Gardiner ', 'Greene ', 'EEUU', 1827);
$autor2 = new Autor('César', 'Mallorquí', 'España', 1956);
$autor3 = new Autor('Francisco', 'Ibañez', 'España', 1899);
$autor4 = new Autor('Charles', 'Forbes', 'EEUU', 1917);



$imprimirAutor = new ImprimirAutor();
echo $imprimirAutor->getInfo($autor1) . PHP_EOL;    
echo $imprimirAutor->getInfo($autor2) . PHP_EOL;
echo $imprimirAutor->getInfo($autor3) . PHP_EOL;
echo $imprimirAutor->getInfo($autor4) . PHP_EOL;

echo str_repeat('-', 40) . PHP_EOL;


$libro1 = new Libro('Las Lagrimas de Shiva', $autor2, 2002);
$libro2 = new Libro('Mortadelo y Filemón', $autor3, 1958);
$revista1 = new Revista('National Geographic', 101120005, 2024, $autor1);
$revista2 = new Revista('forbes', 1868814, 2025, $autor4);


$publicables = [$libro1, $libro2, $revista1, $revista2];


foreach ($publicables as $item) {
    echo $item->getInfo() . PHP_EOL;
}
