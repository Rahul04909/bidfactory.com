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

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>

                <!-- Mobile CTAs inside the drawer -->
                <div class="header-ctas-mobile">
                    <a href="tel:+919217102196" class="btn-call">
                        <i class="fas fa-phone-alt"></i> +91-9217102196
                    </a>
                    <a href="#" class="btn-quote">Get Started</a>
                </div>
            </ul>
        </nav>

        <div class="header-ctas">
            <a href="tel:+919876543210" class="btn-call">
                <i class="fas fa-phone-alt"></i> +91-9217102196
            </a>
            <a href="#" class="btn-quote">Get Started</a>
        </div>

        <div class="mobile-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <!-- Custom Header JS -->
    <script src="assets/js/header.js"></script>