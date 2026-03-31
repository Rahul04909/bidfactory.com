document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const menuClose = document.querySelector('.menu-close');
    const menuOverlay = document.querySelector('.menu-overlay');
    const navMenu = document.querySelector('.nav-menu');
    const body = document.body;

    // Sticky Scroll Effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Function to Toggle Menu
    const toggleMenu = () => {
        navMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        
        if (navMenu.classList.contains('active')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }
    };

    // Event Listeners for Open/Close
    mobileToggle.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', toggleMenu);

    // Mobile Dropdown Toggle
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = dropdownToggle.querySelector('.dropdown');

    if (dropdownToggle) {
        dropdownToggle.querySelector('.nav-link').addEventListener('click', (e) => {
            if (window.innerWidth <= 1100) {
                e.preventDefault();
                e.stopPropagation(); // Prevent bubbling to the nav-menu
                
                dropdownMenu.classList.toggle('show');
                dropdownToggle.classList.toggle('active');
            }
        });
    }

    // Close menu when clicking on a regular nav link
    navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            // Only close if it's not the dropdown toggle
            if (!link.parentElement.classList.contains('dropdown-toggle')) {
                if (window.innerWidth <= 1100) {
                    toggleMenu();
                }
            }
        });
    });
});
