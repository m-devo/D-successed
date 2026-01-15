<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3 custom-navbar">
    <div class="container px-4 px-md-5">
        
        <a class="navbar-brand fw-bold fs-2" href="https://dsuccessed.com/">
            D<span class="text-warning">successed</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-0 mb-lg-0 fw-medium gap-lg-1 gap-0">
                    <li class="nav-item"><a class="nav-link text-warning" href="#">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                    <ul class="dropdown-menu">
                        <li><a href="enterprise-sms-solution" class="dropdown-item">Enterprise SMS Solution</a></li>
                        <li><a href="enterprise-email-solution" class="dropdown-item">Enterprise Email Solution</a></li>
                        <li><a href="whatsapp-buiness-messaging " class="dropdown-item">Whatsapp Business Messaging</a></li>
                        <li><a href="rich-communication-servies" class="dropdown-item">Rich Communication Servies</a></li>
                        <li><a href="Gen-ai-voicebot" class="dropdown-item">Gen&nbsp;AI Bot</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu rounded">
                        <li><a href="ai-training" class="dropdown-item">AI Training</a></li>
                        <li><a href="seo-courses" class="dropdown-item">SEO Training</a></li>
                        <li><a href="pay-per-click-courses" class="dropdown-item">Pay Per Click Training</a></li>
                        <li><a href="search-engine-marketing-courses" class="dropdown-item">Search Engine Marketing Training</a></li>
                        <li><a href="social-media-optimization-courses" class="dropdown-item">Social Media Optimization Training</a></li>
                        <li><a href="social-media-marketing-courses" class="dropdown-item">Social Media Marketing Training</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="service" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                    <ul class="dropdown-menu rounded">
                        <li><a href="affiliate-marketing" class="dropdown-item">Affiliate Marketing</a></li>
                        <li><a href="seo-service" class="dropdown-item">SEO Services</a></li>
                        <li><a href="social-media-marketing" class="dropdown-item">Social Media Marketing</a></li>
                        <li><a href="social-media-optimization" class="dropdown-item">Social Media Optimization</a></li>
                        <li><a href="search-engine-marketing" class="dropdown-item">Search Engine Marketing</a></li>
                        <li><a href="web-development" class="dropdown-item">Web Development</a></li>
                        <li><a href="web-designing" class="dropdown-item">Web Designing Services</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="Institute" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Institute</a>
                    <ul class="dropdown-menu rounded">
                        <li><a href="digital-marketing-institute-in-sikar" class="dropdown-item">Digital Marketing Institute Sikar</a></li>
                        <li><a href="digital-marketing-institute-in-jaipur" class="dropdown-item">Digital Marketing Institute Jaipur</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>

            <div class="mobile-contact-group d-flex align-items-center gap-4 mt-3 mt-lg-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                    <a href="tel:+917410815341" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x" style="transform: scaleX(-1);"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-warning"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Have any questions?</span>
                    <span class="text-warning">Call: 7410815341</span>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="#"><i class="fas fa-search text-white fa-2x"></i> </a>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navCollapse = document.getElementById('mainNav');
        const bsCollapse = new bootstrap.Collapse(navCollapse, {toggle: false});
        const navbar = document.querySelector('.navbar');

        const navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item');
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });

        document.addEventListener('click', function(event) {
            const isClickInsideNavbar = navbar.contains(event.target);
            const isMenuOpen = navCollapse.classList.contains('show');

            if (!isClickInsideNavbar && isMenuOpen) {
                bsCollapse.hide();
            }
        });
    });
</script>
</nav>