<?php
$host = 'localhost';
$db   = 'users';      // Deine Datenbank heißt "users"
$user = 'root';       // Standard XAMPP Benutzer
$pass = '';           // Standard XAMPP Passwort (leer)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    exit('Datenbank-Verbindung fehlgeschlagen: ' . $e->getMessage());
}
