<!-- Hero Section Component -->
<link rel="stylesheet" href="assets/css/hero.css?v=<?php echo time(); ?>">

<section class="hero-slider-section">
    <div class="slider-container" id="heroSlider">
        <div class="slider-wrapper">
            <!-- Slide 1 -->
            <div class="hero-slide active" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                <div class="hero-container">
                    <div class="hero-content">
                        <span class="slide-badge">Exclusive Offer</span>
                        <h1>INVEST ₹10,000/MONTH <br><span>and get ₹1 CRORE RETURNS*</span></h1>
                        <p>Secure your family's future with our expert-guided investment plans and in-built life cover.</p>
                    </div>
                    <div class="hero-image">
                        <img src="assets/frontend/hero_slide_1.png" alt="Investment Expert">
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" style="background: linear-gradient(135deg, #4c1d95 0%, #8b5cf6 100%);">
                <div class="hero-container">
                    <div class="hero-content">
                        <span class="slide-badge">Business Growth</span>
                        <h1>SCALE YOUR BUSINESS <br><span>to the NEXT LEVEL</span></h1>
                        <p>Get expert consultation on business registration, taxes, and digital scaling strategies.</p>
                        <div class="hero-actions">
                            <a href="#" class="btn-plans">Get Started <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="assets/frontend/hero_slide_2.png" alt="Business Growth">
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" style="background: linear-gradient(135deg, #064e3b 0%, #10b981 100%);">
                <div class="hero-container">
                    <div class="hero-content">
                        <span class="slide-badge">Digital Transformation</span>
                        <h1>DOMINATE THE <br><span>DIGITAL LANDSCAPE</span></h1>
                        <p>Full-stack development, ERP solutions, and advanced SEO to make your brand unbeatable.</p>
                        <div class="hero-actions">
                            <a href="#" class="btn-plans">Explore Now <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="assets/frontend/hero_slide_3.png" alt="Digital Tech">
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="slider-nav">
            <button class="nav-btn prev-btn" id="prevSlide"><i class="fas fa-chevron-left"></i></button>
            <button class="nav-btn next-btn" id="nextSlide"><i class="fas fa-chevron-right"></i></button>
        </div>

        <!-- Indicators -->
        <div class="slider-indicators">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>
</section>

<!-- Hero Section JS -->
<script src="assets/js/hero.js?v=<?php echo time(); ?>"></script>