/* Contact Page JS - Form Interaction & Validation */
document.addEventListener("DOMContentLoaded", function() {
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function(e) {
            e.preventDefault();

            // Simple validation check
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const message = document.getElementById("message").value.trim();

            if (!name || !email || !message) {
                alert("Please fill in all required fields.");
                return;
            }

            // Mock submission success
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

            // Simulate server delay
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check-circle"></i> Message Sent!';
                submitBtn.style.backgroundColor = '#1d7a76';
                
                // Show success container or alert
                alert("Thank you for reaching out! We will get back to you within 24 hours.");
                
                // Reset form
                contactForm.reset();
                
                // Re-enable button after 3 seconds
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.backgroundColor = '';
                }, 3000);
            }, 1500);
        });
    }
});
