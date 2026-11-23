<?php
declare(strict_types=1);

/**
 * Conexión reutilizable a MySQL (Clever Cloud) mediante PDO.
 * El portal funciona SIN base de datos; este archivo solo se carga si una futura
 * funcionalidad llama a db(). Las credenciales se leen de variables de entorno:
 * DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD (nunca en el código).
 */
function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }
    foreach (['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD'] as $k) {
        if (getenv($k) === false || getenv($k) === '') {
            throw new RuntimeException('Falta la variable de entorno ' . $k);
        }
    }
    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
        getenv('DB_HOST'),
        getenv('DB_PORT') ?: '3306',
        getenv('DB_NAME')
    );
    $pdo = new PDO($dsn, (string)getenv('DB_USER'), (string)getenv('DB_PASSWORD'), [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false, // consultas preparadas reales (anti SQL injection)
    ]);
    return $pdo;
}

/** Token CSRF para formularios futuros (sesión). */
function csrf_token(): string
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax', 'cookie_secure' => true]);
    }
    return $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}

function csrf_check(?string $t): bool
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax', 'cookie_secure' => true]);
    }
    return is_string($t) && isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $t);
}
