document.addEventListener('DOMContentLoaded', () => {
    const heroForm = document.getElementById('heroEnquiryForm');

    if (heroForm) {
        heroForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Simple validation
            const name = document.getElementById('heroName').value;
            const mobile = document.getElementById('heroMobile').value;
            const email = document.getElementById('heroEmail').value;
            const service = document.getElementById('heroService').value;

            if (!name || !mobile || !email || !service) {
                alert('Please fill all the required fields.');
                return;
            }

            if (mobile.length !== 10 || isNaN(mobile)) {
                alert('Please enter a valid 10-digit mobile number.');
                return;
            }

            // Success simulation
            const btn = heroForm.querySelector('.btn-hero');
            const originalText = btn.textContent;
            
            btn.disabled = true;
            btn.textContent = 'Wait a moment...';
            btn.style.opacity = '0.7';

            setTimeout(() => {
                btn.textContent = 'Enquiry Sent Successfully!';
                btn.style.background = '#10b981'; // Green
                btn.style.boxShadow = '0 0 20px rgba(16, 185, 129, 0.4)';
                
                // Clear form
                heroForm.reset();
                
                setTimeout(() => {
                    btn.disabled = false;
                    btn.textContent = originalText;
                    btn.style.background = '';
                    btn.style.opacity = '';
                    btn.style.boxShadow = '';
                }, 3000);
            }, 1500);
        });
    }
});
