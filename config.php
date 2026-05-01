<?php

declare(strict_types=1);

$host = getenv('RAILWAY_DB_HOST') ?: '127.0.0.1';
$port = getenv('RAILWAY_DB_PORT') ?: '3306';
$db   = getenv('RAILWAY_DB_NAME') ?: 'stylehub';
$user = getenv('RAILWAY_DB_USER') ?: 'root';
$pass = getenv('RAILWAY_DB_PASSWORD') ?: '';
$charset = 'utf8mb4';

$dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s', $host, $port, $db, $charset);
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo '<h1>Database connection error</h1>';
    echo '<p>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
    exit;
}
