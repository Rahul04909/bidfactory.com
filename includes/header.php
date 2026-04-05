<?php
/**
 * Header Component for BidFactory.com
 * Modern, Responsive & Interactive
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Header CSS -->
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>

    <header class="header">
        <a href="#" class="logo">
            <!-- Replace with your actual logo img -->
            <img src="assets/logo.png" alt="BidFactory Logo">
            <!-- <span>Bid<span>Factory</span></span> -->
        </a>

        <div class="menu-overlay"></div>

        <nav class="nav-container">
            <ul class="nav-menu">
                <!-- Sidebar Header for Mobile -->
                <div class="sidebar-header">
                    <div class="logo">
                        <span>Bid<span>Factory</span></span>
                    </div>
                    <div class="menu-close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item dropdown-toggle">
                    <a href="#" class="nav-link">Services <i class="fas fa-chevron-down"
                            style="font-size: 0.7rem; margin-left: 5px;"></i></a>
                    <ul class="dropdown">
                        <li><a href="#" class="dropdown-item">Business Registration</a></li>
                        <li><a href="#" class="dropdown-item">Digital Marketing</a></li>
                        <li><a href="#" class="dropdown-item">Website & ERP Development</a></li>
                        <li><a href="#" class="dropdown-item">Branding & Local SEO</a></li>
                        <li><a href="#" class="dropdown-item">Portfolio / Case Studies</a></li>
                        <li><a href="#" class="dropdown-item">Google Profile Services</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

                <!-- Mobile CTAs inside the drawer -->
                <div class="header-ctas-mobile">
                    <a href="tel:+919876543210" class="btn-call">
                        <i class="fas fa-phone-alt"></i> +91-9876543210
                    </a>
                    <a href="#" class="btn-quote">Get Started</a>
                </div>
            </ul>
        </nav>

        <div class="header-ctas">
            <a href="tel:+919876543210" class="btn-call">
                <i class="fas fa-phone-alt"></i> +91-9876543210
            </a>
            <a href="#" class="btn-quote">Get Started</a>
        </div>

        <div class="mobile-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <!-- Custom Header JS -->
    <script src="assets/js/header.js"></script>
</body>

</html>