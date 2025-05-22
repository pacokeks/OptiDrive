<?php
session_start();

// Konfiguration
$valid_username = 'admin';
$valid_password_hash = password_hash('geheim', PASSWORD_DEFAULT); // In Produktion: Passwort aus DB

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Einfache Authentifizierung (in Produktion sicherer!)
    if($username === $valid_username && password_verify('geheim', $valid_password_hash)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: /pages/dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = 'Ungültige Anmeldedaten';
        header('Location: /pages/login.php');
        exit;
    }
}

header('Location: /pages/login.php');
?>