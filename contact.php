<?php
// Contact Us Page - BidFactory.co.in
$page_title = "Contact Us | BidFactory - Procurement & Business Growth Support";
$meta_description = "Get in touch with BidFactory for expert support with GeM registration, tender sourcing, digital marketing, and business enablement. We're here to help you grow.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/font-awesome.min.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="contact-page">
        <div class="contact-container">
            
            <!-- Contact Form Section -->
            <section class="contact-form-column">
                <div class="contact-form-card">
                    <h2>Send Us a Message</h2>
                    <p>Tell us about your business goals, and our experts will get back to you with a tailored solution.</p>
                    
                    <form id="contactForm" class="contact-form">
                        <div class="form-grid">
                            <!-- Full Name -->
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required>
                            </div>
                            
                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+91-9876543210">
                            </div>
                            
                            <!-- Company -->
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" id="company" name="company" placeholder="Business Name Pvt Ltd">
                            </div>

                            <!-- Service Choice -->
                            <div class="form-group full-width">
                                <label for="service">Service of Interest</label>
                                <select id="service" name="service">
                                    <option value="">Select a service...</option>
                                    <option value="gem">GeM & Registration Services</option>
                                    <option value="marketing">Digital Marketing & Presence</option>
                                    <option value="subscription">Tender Sourcing Subscription</option>
                                    <option value="on-demand">On-Demand Standalone Services</option>
                                    <option value="other">Other Requirements</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="form-group full-width">
                                <label for="message">Your Message *</label>
                                <textarea id="message" name="message" placeholder="How can we help your business grow?" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </section>

            <!-- Contact Info Column -->
            <aside class="contact-info-column">
                
                <!-- Info Card: Location -->
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info-details">
                        <h3>Our Location</h3>
                        <p>New Delhi, India</p>
                    </div>
                </div>

                <!-- Info Card: Phone -->
                <div class="info-card">
                    <i class="fas fa-phone-alt"></i>
                    <div class="info-details">
                        <h3>Call Support</h3>
                        <a href="tel:+919876543210">+91-9876543210</a>
                        <p>Mon - Sat: 9am - 6pm</p>
                    </div>
                </div>

                <!-- Info Card: Email -->
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <div class="info-details">
                        <h3>Email Outreach</h3>
                        <a href="mailto:contact@bidfactory.co.in">contact@bidfactory.co.in</a>
                    </div>
                </div>

                <!-- Info Card: WhatsApp -->
                <div class="info-card">
                    <i class="fab fa-whatsapp"></i>
                    <div class="info-details">
                        <h3>WhatsApp Support</h3>
                        <a href="https://wa.me/919876543210">Message us on WhatsApp</a>
                        <p>Instant Support Response</p>
                    </div>
                </div>

            </aside>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- JS Scripts -->
    <script src="assets/js/header.js"></script>
    <script src="assets/js/contact.js"></script>
</body>
</html>
