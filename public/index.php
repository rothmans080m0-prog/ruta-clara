<?php
declare(strict_types=1);

// Con el servidor integrado de PHP (desarrollo local): sirve archivos estáticos tal cual.
if (PHP_SAPI === 'cli-server') {
    $f = __DIR__ . parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    if (is_file($f) && basename($f) !== 'index.php') {
        return false;
    }
}

require __DIR__ . '/../src/bootstrap.php';
route();
