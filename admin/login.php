<?php
/**
 * Admin Login Page
 * for BidFactory.co.in
 */

require_once __DIR__ . '/../database/db_config.php';

// Redirect to dashboard if already logged in
if ($auth->isLogged()) {
    header('Location: index.php');
    exit();
}

$error_message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']) ? 1 : 0;

    // PHPAuth login logic
    $login = $auth->login($email, $password, $remember);

    if (!$login['error']) {
        // Set secure auth cookie and redirect
        setcookie($config->cookie_name, $login['hash'], $login['expire'], $config->cookie_path, $config->cookie_domain, (bool) $config->cookie_secure, (bool) $config->cookie_http);
        header('Location: index.php');
        exit();
    } else {
        $error_message = $login['message'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | BidFactory</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0b213b;
            --accent: #1d7a76;
            --text-muted: #64748b;
            --bg: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-card {
            background: #fff;
            padding: 50px 40px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(11, 33, 59, 0.1);
            width: 100%;
            max-width: 420px;
            border: 1px solid #e2e8f0;
            text-align: center;
        }

        .logo {
            margin-bottom: 35px;
            display: inline-block;
        }

        .logo img {
            height: 55px;
            width: auto;
            background: #fff;
            padding: 8px 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        h1 {
            font-size: 1.75rem;
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        p.subtitle {
            color: var(--text-muted);
            margin-bottom: 35px;
            font-size: 0.95rem;
        }

        .alert {
            background-color: #fee2e2;
            color: #ef4444;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            text-align: left;
            border: 1px solid #fecaca;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .form-control {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
            background: #f8fafc;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(29, 122, 118, 0.1);
        }

        .remember-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: var(--text-muted);
            cursor: pointer;
        }

        .btn-login {
            background-color: var(--primary);
            color: #fff;
            border: none;
            width: 100%;
            padding: 16px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-login:hover {
            background-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(29, 122, 118, 0.2);
        }

        .bg-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(135deg, #0b213b 0%, #1d7a76 100%);
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            top: -100px;
            right: -100px;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: -50px;
            left: -50px;
        }
    </style>
</head>

<body>

    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>

    <div class="login-card">
        <a href="../" class="logo">
            <img src="../assets/logo.png" alt="BidFactory Logo">
        </a>

        <h1>Admin Control Panel</h1>
        <p class="subtitle">Enter your credentials to access the dashboard</p>

        <?php if ($error_message): ?>
            <div class="alert">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Work Email</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="admin@bidfactory.co.in" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••"
                        required>
                </div>
            </div>

            <div class="remember-flex">
                <label class="remember-me">
                    <input type="checkbox" name="remember"> Remember for 30 days
                </label>
            </div>

            <button type="submit" class="btn-login">
                Access Dashboard <i class="fas fa-arrow-right-long"></i>
            </button>
        </form>
    </div>

</body>

</html>