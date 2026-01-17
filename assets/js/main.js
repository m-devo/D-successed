document.addEventListener("DOMContentLoaded", function () {

    /* 
       navbar collabse
     */
    const navCollapse = document.getElementById('mainNav');
    const navbar = document.querySelector('.navbar');

    if (navCollapse && navbar && window.bootstrap) {
        const bsCollapse = new bootstrap.Collapse(navCollapse, { toggle: false });

        const navLinks = document.querySelectorAll(
            '.nav-link:not(.dropdown-toggle), .dropdown-item'
        );

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });

        document.addEventListener('click', function (event) {
            if (!navbar.contains(event.target) &&
                navCollapse.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
    }

    /* 
       features observer
     */
const featureRows = document.querySelectorAll('.feature-row');

    if (featureRows.length > 0 && 'IntersectionObserver' in window) {

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15 
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible'); 
                    
                    const connector = entry.target.querySelector('.connector-s-shape');
                    if (connector) {
                        connector.classList.add('is-visible');
                    }
                    
                    observer.unobserve(entry.target); 
                }
            });
        }, observerOptions);

        featureRows.forEach(row => observer.observe(row));
    }

});
