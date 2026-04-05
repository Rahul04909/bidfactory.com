<?php
/**
 * Admin Logout Handler
 * for BidFactory.co.in
 */

require_once __DIR__ . '/../database/db_config.php';

// Check if auth cookie exists
if (isset($_COOKIE[$config->cookie_name])) {
    // Logout the session in PHPAuth
    $auth->logout($_COOKIE[$config->cookie_name]);
    
    // Clear the auth cookie
    setcookie($config->cookie_name, '', time() - 3600, $config->cookie_path, $config->cookie_domain, (bool)$config->cookie_secure, (bool)$config->cookie_http);
}

// Redirect to login page
header('Location: login.php');
exit();
?>
