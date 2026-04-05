<?php
/**
 * Database Configuration & Auth Initialization
 * for BidFactory.co.in
 */

// Autoload PHPAuth and other vendor packages
require_once __DIR__ . '/../vendor/autoload.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuthMain;

// Database connection parameters
$host = 'localhost';
$dbname = 'jhdindus_bidfactory';
$user = 'jhdindus_bidfactory';
$pass = 'Rd14072003@./';

try {
    // Create PDO connection
    $dbh = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    // Initialize PHPAuth Config
    $config = new PHPAuthConfig($dbh);

    // Initialize PHPAuth Main class
    $auth = new PHPAuthMain($dbh, $config, "en_GB");

} catch (\PDOException $e) {
    die("Database Connection Error: " . $e->getMessage());
}
?>