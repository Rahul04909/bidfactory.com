<?php
// Terms & Conditions Page - BidFactory.co.in
$page_title = "Terms & Conditions | BidFactory - Professional Procurement Consulting";
$meta_description = "Read the official Terms and Conditions of BidFactory.co.in. Learn about our GST policies, subscription billing, and standalone service terms for procurement consulting.";
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
    <link rel="stylesheet" href="assets/css/terms.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/font-awesome.min.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="terms-page">
        <div class="terms-container">
            <!-- Header section -->
            <header class="terms-header">
                <span class="last-updated">Last Updated: April 2025</span>
                <h1>Terms & Conditions</h1>
            </header>

            <!-- Clauses Section -->
            <div class="terms-content">
                
                <!-- Clause 1: GST Policy -->
                <div class="clause-item">
                    <div class="clause-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <div class="clause-text">
                        <h2>Taxation & GST</h2>
                        <p>All prices listed on BidFactory.co.in are <span class="gst-highlight">exclusive of GST (18%)</span> unless specifically stated otherwise in the service agreement or invoice.</p>
                    </div>
                </div>

                <!-- Clause 2: Subscription terms -->
                <div class="clause-item">
                    <div class="clause-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="clause-text">
                        <h2>Subscription Billing</h2>
                        <p>Subscription plans are billed in advance at the start of each billing cycle. <span class="gst-highlight">No refunds</span> are provided for partial months or unused services within the current billing period.</p>
                    </div>
                </div>

                <!-- Clause 3: Pricing Validity -->
                <div class="clause-item">
                    <div class="clause-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="clause-text">
                        <h2>Pricing Validity</h2>
                        <p>Annual subscription pricing and one-time setup fees are valid for <span class="fy-badge">FY 2025-26</span>. All rates are subject to revision at the end of the fiscal year or upon contract renewal.</p>
                    </div>
                </div>

                <!-- Clause 4: Service Invoicing -->
                <div class="clause-item">
                    <div class="clause-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="clause-text">
                        <h2>On-Demand Task Invoicing</h2>
                        <p>On-demand services (standalone tasks) are invoiced individually upon successful task completion or as per the milestones defined in the specific service request.</p>
                    </div>
                </div>

                <!-- Clause 5: Outside scope -->
                <div class="clause-item">
                    <div class="clause-icon">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    <div class="clause-text">
                        <h2>Additional Service Charges</h2>
                        <p>Any services requested beyond the pre-defined scope (e.g., extra GeM listings, additional state registrations, or new categories) will be charged as noted in our service catalog.</p>
                    </div>
                </div>

            </div>

            <!-- Footer for the terms document -->
            <footer class="terms-footer">
                <p>Have questions regarding these terms?</p>
                <a href="https://wa.me/919876543210" class="btn-contact-support">Contact Support at support@bidfactory.co.in</a>
            </footer>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/header.js"></script>
</body>
</html>
