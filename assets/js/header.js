document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('.mobile-toggle');
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

    // Mobile Menu Toggle
    mobileToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        mobileToggle.querySelector('i').classList.toggle('fa-bars');
        mobileToggle.querySelector('i').classList.toggle('fa-times');
        
        // Prevent body scrolling when menu is open
        if (navMenu.classList.contains('active')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }
    });

    // Mobile Dropdown Toggle
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = dropdownToggle.querySelector('.dropdown');
    const chevronIcon = dropdownToggle.querySelector('.fa-chevron-down');

    dropdownToggle.querySelector('.nav-link').addEventListener('click', (e) => {
        if (window.innerWidth <= 1100) {
            e.preventDefault(); // Prevent navigation if it's a dropdown toggle on mobile
            dropdownMenu.classList.toggle('show');
            dropdownToggle.classList.toggle('active');
        }
    });

    // Close menu when clicking on a link (excluding dropdown toggles that open submenus)
    navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            if (!link.parentElement.classList.contains('dropdown-toggle') || window.innerWidth > 1100) {
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').classList.add('fa-bars');
                mobileToggle.querySelector('i').classList.remove('fa-times');
                body.style.overflow = 'auto';
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target) && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            mobileToggle.querySelector('i').classList.add('fa-bars');
            mobileToggle.querySelector('i').classList.remove('fa-times');
            body.style.overflow = 'auto';
        }
    });
});
