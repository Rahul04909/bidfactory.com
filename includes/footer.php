<!-- Professional Footer Redesign - High Authority Three-Column Layout -->
<link rel="stylesheet" href="assets/css/footer.css">

<footer class="footer">
    <div class="footer-container">
        <!-- Column 1: Brand & Description -->
        <div class="footer-column footer-about">
            <a href="#" class="logo">
                <img src="assets/logo.png" alt="BidFactory Logo">
            </a>
            <p>Empowering businesses with top-tier procurement, business enablement, and scalable digital solutions. We
                turn your vision into sustainable growth.</p>
            <div class="social-links">
                <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Portfolio</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Case Studies</a></li>
                <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
            </ul>
        </div>

        <!-- Column 3: Contact Us -->
        <div class="footer-column">
            <h3>Contact Us</h3>
            <ul class="contact-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Sector 108, Gurugram, Haryana, India</span>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+919217102196">+91-9217102196</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contact@bidfactory.co.in">contact@bidfactory.co.in</a>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> BidFactory. All rights reserved.</p>
        <div class="footer-links-bottom">
            <a href="#">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="#">Sitemap</a>
        </div>
    </div>
</footer>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    });
</script>

</body>
</html>