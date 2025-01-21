<?php
// Database configuration
$db_host = 'localhost';
$db_name = 'uikit_demo';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Helper functions
function asset($path) {
    return $path;
}

function route($name) {
    $routes = [
        'home' => '/',
        'contact' => '/contact.php',
        'settings' => '/settings.php'
    ];
    return $routes[$name] ?? '/';
}
?>