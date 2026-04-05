<?php
/**
 * Default Admin Insertion Script
 * for BidFactory.co.in
 */

require_once __DIR__ . '/../database/db_config.php';

// Default Admin Details
$name = "Rahul Administrator";
$email = "admin@bidfactory.co.in";
$mobile = "9876543210";
$password = "admin123";
$repeat_password = "admin123";
$profile_image = "default_admin.png";

// Additional parameters for custom fields
$params = [
    'name' => $name,
    'mobile' => $mobile,
    'profile_image' => $profile_image
];

echo "<h2>BidFactory Admin Setup</h2>";

try {
    // Check if user already exists
    $check = $dbh->prepare("SELECT id FROM phpauth_users WHERE email = ?");
    $check->execute([$email]);
    
    if ($check->rowCount() > 0) {
        die("<p style='color: orange;'>Admin user already exists in the database.</p>");
    }

    // Register user using PHPAuth (auto-activates because email suppression is ON in config)
    $register = $auth->register($email, $password, $repeat_password, $params);

    if (!$register['error']) {
        echo "<p style='color: green;'>Success! Admin user created successfully.</p>";
        echo "<ul>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Password:</strong> $password</li>
              </ul>";
        echo "<p><a href='../admin/login.php'>Go to Admin Login</a></p>";
    } else {
        echo "<p style='color: red;'>Error: " . $register['message'] . "</p>";
    }

} catch (Exception $e) {
    echo "<p style='color: red;'>Critical Error: " . $e->getMessage() . "</p>";
}
?>
