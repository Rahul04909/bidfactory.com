<!-- Hero Section Component -->
<link rel="stylesheet" href="assets/css/hero.css">

<section class="hero-section">
    <div class="hero-container">
        <!-- Hero Content -->
        <div class="hero-content">
            <span class="hero-badge">Expert Consultancy Services</span>
            <h1>Growth-Focused <span>Business Solutions</span> Tailored for You</h1>
            <p>From company registration to high-performance digital marketing, we provide end-to-end services to scale your business with confidence.</p>

            <div class="trust-grid">
                <div class="stat-box">
                    <i class="fas fa-smile"></i>
                    <div>
                        <span class="stat-value">99.8%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span class="stat-value">1200+</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                </div>
                <div class="stat-box live">
                    <div class="live-dot"></div>
                    <div>
                        <span class="stat-value blinking">Live Now</span>
                        <span class="stat-label">15+ Experts Online</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Enquiry Form -->
        <div class="hero-form-card">
            <h2>Get a Free Consultation</h2>
            <p>Fill the form below and our experts will reach out to you within 24 hours.</p>

            <form id="heroEnquiryForm">
                <div class="form-group">
                    <label for="heroName">Your Full Name</label>
                    <input type="text" id="heroName" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="heroMobile">Mobile Number</label>
                    <input type="tel" id="heroMobile" class="form-control" placeholder="e.g. 9876543210" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="heroEmail">Email Address</label>
                    <input type="email" id="heroEmail" class="form-control" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label for="heroService">Select Service</label>
                    <select id="heroService" class="form-control" required>
                        <option value="">-- Choose a Service --</option>
                        <option value="Business Registration">Business Registration</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Website & ERP Development">Website & ERP Development</option>
                        <option value="Branding & Local SEO">Branding & Local SEO</option>
                        <option value="Google Profile Services">Google Profile Services</option>
                    </select>
                </div>

                <button type="submit" class="btn-hero">Talk to our Experts Now</button>
            </form>
        </div>
    </div>
</section>

<!-- Hero Section JS -->
<script src="assets/js/hero.js"></script>
